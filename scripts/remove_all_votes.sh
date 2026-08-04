#!/bin/bash
#
# Ce script fait le ménage des inscriptions
# Il est exécuté chaque semaine (cron) et conserve une archive unique des inscriptions
# L'archive peut être téléchargée à $FRAMA_URL/$ARCHIVE_NAME
# PARAMÈTRES: nom_du_sondage
#

FRAMA_URL=https://sportentete.qc.ca/framadate
FRAMA_DIR=/home/sporte2/public_html/framadate
ARCHIVE_NAME=archive.zip
SURVEY_DATE=$(date -d "yesterday" -I)
SURVEY_NAME=$1

case "${SURVEY_NAME}" in
  # exécuté le vendredi
  "mardi")
    SURVEY_ADMIN_URL="wmMyvOFRmHaaX2ENKKETtrRk"
    SURVEY_DATE=$(date -d "yesterday - 2 days" -I)
    ;;
  "mercredi")
    SURVEY_ADMIN_URL="qb9TdWzLgLPHnycqlpLQLTZj"
    SURVEY_DATE=$(date -d "yesterday - 1 days" -I)
    ;;
  "jeudi")
    SURVEY_ADMIN_URL="vVCGXJzoSp3AFmGYBmczlkya"
    SURVEY_DATE=$(date -d "yesterday" -I)
    ;;
  # exécuté le lendemain
  "samedi")
    SURVEY_ADMIN_URL="t69xgKqLW4M3qI8urMPN8lQu"
    ;;
  "dimanche")
    SURVEY_ADMIN_URL="mMslwIji1Tfos5MMVl7WSwpD"
    ;;
  # exécuté au besoin
  "special1")
    SURVEY_ADMIN_URL="2tqvM3Cb77PTfXxkpR1i8AQ4"
    ;;
  "special2")
    SURVEY_ADMIN_URL="tRlWatH835r3YQCUMnMACels"
    ;;
  "special3")
    SURVEY_ADMIN_URL="IlyrfxUZhontnK7T2EtUyA2w"
    ;;
  *)
    echo "Usage is: $0 survey_name"
    exit 1
    ;;
esac

# export votes to csv file, compress to zip archive and delete csv file
/usr/bin/curl ${FRAMA_URL}/exportcsv.php?admin=${SURVEY_ADMIN_URL} > ${FRAMA_DIR}/${SURVEY_DATE}_${SURVEY_NAME}.csv
/usr/bin/zip -urmj ${FRAMA_DIR}/${ARCHIVE_NAME} ${FRAMA_DIR}/${SURVEY_DATE}_${SURVEY_NAME}.csv

# remove all votes from survey
/usr/bin/curl -o /dev/null -d "confirm_remove_all_votes=" ${FRAMA_URL}/${SURVEY_ADMIN_URL}/admin
