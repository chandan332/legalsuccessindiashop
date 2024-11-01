#!/bin/bash

# remove .env
echo "removing .env..."
rm .env

#symlink .env to .env.example
echo "symlinking .env to .env.example..."
ln -s .env.example .env

#sysmlink public_html to public/
echo "symlinking public_html to public/..."
ln -s public/ public_html

#install dependencies
echo "installing dependencies..."
~/composer.phar install && npm install

#build assets
echo "building assets..."
npm run build

#generate key
echo "generating key..."
php artisan key:generate

#symlink public/storage to strorage/app/public
echo "symlinking public/storage to strorage/app/public..."
cd public
ln -s ../storage/app/public storage
cd ..