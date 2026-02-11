#!/bin/bash
# Script pour créer les répertoires de cache et logs avec les bonnes permissions

PROJECT_DIR="/var/www/wr602"

# Créer les répertoires nécessaires
mkdir -p "$PROJECT_DIR/var/cache/dev"
mkdir -p "$PROJECT_DIR/var/cache/prod"
mkdir -p "$PROJECT_DIR/var/log"

# Définir les permissions (ajustez selon votre configuration serveur)
# Pour Apache/Nginx avec www-data
if id "www-data" &>/dev/null; then
    chown -R www-data:www-data "$PROJECT_DIR/var"
    chmod -R 775 "$PROJECT_DIR/var"
    echo "Permissions définies pour www-data"
# Pour nginx
elif id "nginx" &>/dev/null; then
    chown -R nginx:nginx "$PROJECT_DIR/var"
    chmod -R 775 "$PROJECT_DIR/var"
    echo "Permissions définies pour nginx"
# Sinon, utilisez les permissions du répertoire parent
else
    chmod -R 777 "$PROJECT_DIR/var"
    echo "Permissions 777 définies (mode développement)"
fi

echo "Répertoires créés avec succès dans $PROJECT_DIR/var"
