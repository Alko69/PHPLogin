# Vagrant et VMs

``` vagrant init ``` => creer le fichier

on cherche a créer un serveur donc on décommente la ligne ip

possibilité d'avoir plusieurs vm avec la même ip mais pas allumée en même temps

192.168 = réseau local/ adresse privée
## Commandes
``` bash 
vagrant init 
mkdir data
vagrant up / vagrant halt 
vagrant ssh
vagrant reload
vagrant destroy
```

## Infos
> Quand on a une maj dans un yes/no => il y a un choix par défaut. On peut juste mettre entrée.    
> synchro
                             
## Installation Serveur
> * Installer serveur apache   ``` sudo apt install apache2 ```
> * Installer PHP 7 ``` sudo apt install php7.0 ```
> * Faire le lien entre les 2 ``` sudo apt install libapache2-mod-php7.0 ```
> * Mettre à jour ``` sudo apt update ```
> * Redémarrer serveur ``` sudo service apache2 restart ```

## Paramètres Vagrant

``` bash
Vagrant.configure("2") do |config|
  config.vm.box = "ubuntu/xenial64"
  config.vm.network "private_network", ip: "192.168.33.10"
  config.vm.synced_folder "./data", "/var/www/html/"
  config.vm.provider :virtualbox do |vb|
      vb.name = "PHP"
  end
end 
```
## Activer erreurs PHP

>* Aller dans la machine virtuelle
>* Modifier php.ini ``` /etc/php/7.0/apache2/php.ini ```
>* Chercher display_error
>* Choisir le 2ème et modifier en 'On' puis la fin du 2ème paragraphe
>* Restart le serveur

