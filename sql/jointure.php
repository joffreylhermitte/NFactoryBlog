<?php
"SELECT T_ADHERENTs.nom,T_MESSAGES.message
FROM T_ADHERENTS,T_MESSAGES
WHERE T_ADHERENTS.id=T_MESSAGES.id_adherent
AND T_ADHERENTS.nom = 'Machin'";

"SELECT T_ADHERENTS.nom,T_MESSAGE.texte
FROM T_ADHERENTS
INNER JOIN T_MESSAGE ON T_ADHERENTS.id=T_MESSAGE.id_adherent
WHERE T_ADHERENTS.nom='Michel'";