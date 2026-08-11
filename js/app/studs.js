/**
 * This software is governed by the CeCILL-B license. If a copy of this license
 * is not distributed with this file, you can obtain one at
 * http://www.cecill.info/licences/Licence_CeCILL-B_V1-en.txt
 *
 * Authors of STUdS (initial project): Guilhem BORGHESI (borghesi@unistra.fr) and Raphaël DROZ
 * Authors of Framadate/OpenSondage: Framasoft (https://github.com/framasoft)
 *
 * =============================
 *
 * Ce logiciel est régi par la licence CeCILL-B. Si une copie de cette licence
 * ne se trouve pas avec ce fichier vous pouvez l'obtenir sur
 * http://www.cecill.info/licences/Licence_CeCILL-B_V1-fr.txt
 *
 * Auteurs de STUdS (projet initial) : Guilhem BORGHESI (borghesi@unistra.fr) et Raphaël DROZ
 * Auteurs de Framadate/OpenSondage : Framasoft (https://github.com/framasoft)
 */

$(document).ready(function () {

    $('#poll_form').submit(function (event) {
        // Name field validation
        var name = $('#name').val().trim();
        var nameIsValid = name.length !== 0;
        
        // Only perform choice validation if the form contains the add-new-vote
        // block or the edit-existing-vote block.
        var isAddNewVote = $('#vote-choice-add').length > 0;
        var isEditVote = $('#vote-choice').length > 0;
        // At least one choice made validation
        var nb_filled_choices = 0;
        $('ul#vote-choice-add input, ul#vote-choice input').each(function () {
            if ($(this).val() == '2' && $(this).is(':checked')) {
                nb_filled_choices++;
            }
        });
        var atLeastOneChoice = nb_filled_choices > 0
        
        // Clear previous messages
        var messageContainer = $('#message-container');
        messageContainer.empty();

        // Validate name
        if (!nameIsValid) {
            event.preventDefault();
            var newMessage = $('#nameErrorMessage').clone();
            messageContainer.append(newMessage);
            newMessage.removeClass('hidden');
            $('html, body').animate({
                scrollTop: messageContainer.offset().top
            }, 750);
            // Don't allow form to continue
            return false;
        }

        // Validate at least one choice
        if ((isAddNewVote || isEditVote) && !atLeastOneChoice) {
            event.preventDefault();
            var choiceMessage = $('#choiceErrorMessage').clone();
            messageContainer.append(choiceMessage);
            choiceMessage.removeClass('hidden');
            $('html, body').animate({
                scrollTop: messageContainer.offset().top
            }, 750);
            // Don't allow form to continue
            return false;
        }
        // If both are valid, allow normal submission
    });

    // Choice radios are visually hidden (see .yes/.ifneedbe/.no input in
    // style.css), so users only ever physically click the associated
    // <label>. Note: these ids (y-choice-N, r-choice-N, ...) are NOT unique
    // across the page - the counter resets to 0 for every voter row - so the
    // input is always resolved via DOM position (.prev(), since it's always
    // the label's immediately preceding sibling within the same <li>)
    // rather than via the "for" attribute / a #id lookup, which would
    // silently target the wrong row. preventDefault() stops the browser's
    // own native label-click behavior (which uses the "for" attribute and
    // would be subject to that same wrong-row risk) so this code is always
    // the one deciding the resulting state.
    $('.choice label').on('click', function(e){
      e.preventDefault();
      var $input = $(this).prev('input[type="radio"]');
      if ($input.is(':checked')) {
        // Already selected: unselect it via the hidden "reset" radio.
        $input.closest('ul').find('input[id^="r-choice-"]').prop('checked', true).trigger('change');
      } else {
        $input.prop('checked', true).trigger('change');
      }
    });

    $('.choice input:radio').on('change', function(){
      $(this).parent().parent().find('.startunchecked').removeClass('startunchecked');
    });
    $('.startunchecked').on('click', function(){
      $(this).removeClass('startunchecked');
    });
    $('.no input').on('focus', function(){
      $(this).next().removeClass('startunchecked');
    });

    $('.remove-column').on('click', function(e){
        var confirmTranslation = $(this).data('remove-confirmation');
        if (confirm(confirmTranslation)) {
            return true;
        } else {
            e.stopPropagation();
            return false
        }
    });

    var form = $('#comment_form');
    form.submit(function(event) {
        event.preventDefault();

        if ($('#comment').val()) {
            $('#add_comment').attr("disabled", "disabled");
            $.ajax({
                type: 'POST',
                url: form.attr('action'),
                data: form.serialize(),
                dataType: 'json',
                success: function(data) {
                    $('#comment').val('');
                    if (data.result) {
                        $('#comments_list')
                            .replaceWith(data.comments);
                        var lastComment = $('#comments_list')
                            .find('div.comment')
                            .last();
                        // TODO : replace old jQuery UI Effect with Modern CSS
                        // lastComment.effect('highlight', {color: 'green'}, 401);
                        $('html, body').animate({
                            scrollTop: lastComment.offset().top
                        }, 750);
                    } else {
                        var newMessage = $('#genericErrorTemplate').clone();
                        newMessage
                            .find('.contents')
                            .text(data.message.message);
                        newMessage.removeClass('hidden');
                        var commentsAlert = $('#comments_alerts');
                        commentsAlert
                            .empty()
                            .append(newMessage);
                        $('html, body').animate({
                            scrollTop: commentsAlert.offset().top
                        }, 750);
                    }
                },
                error: function (data) {
                    console.error(data);
                },
                complete: function() {
                    $('#add_comment').removeAttr("disabled");
                }
            });
        }

        return false;
    });

    /**
     * Disable view public results option when there's a password and the poll is not hidden
     */
    $('#password').on('keyup change', function () {
        if($('#password').val() && !($('#hidden').prop('checked'))){
            $('#resultsPubliclyVisible').removeAttr('disabled');
        } else {
            $('#resultsPubliclyVisible').attr('disabled','disabled');
        }
    });
});
