#!/bin/bash

DEST="/home/kthfs/kthfsae-wiki"

docker exec -it db mysqldump -u FS_wiki -pP@ssoword2003! FS_wiki_db > $DEST/backup/db/wiki_db_$(date +%F).sql
gzip -9 $DEST/backup/db/wiki_db_$(date +%F).sql
cp -r $DEST/data/images $DEST/backup/images/img_$(date +%F)
zip -r $DEST/backup/images/img_$(date +%F).zip $DEST/backup/images/img_$(date +%F)
rm -r $DEST/backup/images/img_$(date +%F)