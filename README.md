# CommunauteDeVoyages

## Description  
Ce projet porte sur le développement d'une application web qui nous permet la planification de futurs voyages virtuels.   
À cette fin, un site Web doit être développé pour visualiser les voyages à venir sur une carte du monde.   
L'interface de requête doit permettre aux utilisateurs de parcourir les parcours des utilisateurs dans leur domaine d'intérêt via l'interface graphique et de contacter ensuite le proposant d'un parcours d'intérêt.  
Google trad | À modifier  
## Technology 

Symfony version : ?

base de données :  
- elasticsearch version ?
- mysql version ?

# Deploy  
```
docker-compose -f docker-compose.yaml up  
```

# Usage  
Se connecter à l'URL suivante :  
```
http://localhost:80/communautevoyage  
```

# Developpment

# Warning   
- Ne jamais pousser votre code sur main !  
- Toujours vérifier de n'envoyer que les sources sur github.
- On pourrait voir à envoyer les contenus des bases de données sur un google drive.  
## Pousser une feature  
```
git checkout -b dev-[USERNAME]-[FEATURE_NAME]  
git add .  
git commit -m "[YOUR_COMMENT_ABOUT_THE_FEATURE]  
git push  
git checkout main  
git pull  
git checkout [YOUR_BRANCH_NAME]  
git merge main [YOUR_BRANCH_NAME]  
git push  
```