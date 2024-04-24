Application des apprenants

# DESCRIPTION

Cette application PHP est conçue pour faciliter la gestion des élèves, qui permettra de gérer les absences et les retards. . Elle utilise une architecture MVC (Modèle-Vue-Contrôleur). Elle est écrite en PHP 8.3.0 et utilise du JS vanillia pour les interactions client-serveur.

# CONFIGURATION

Le ficher de config : 
     
     define('HOME_URL', '/AGDA/public/');
     define('DB_HOST', 'localhost');
     define('DB_NAME', 'application');
     define('DB_USER', 'application');
     define('DB_PWD', 'application');

     define('DB_INITIALIZED', TRUE);

# FONCTIONNALITES

* Apparition de la page connexion

# FONCTIONNALITE A VENIR 

* 2 profils teacher et student
* Gestion de plusieurs classes
* Generation du code selon le cours par le.la formateur.ice
* Le status de l'apprenant dépend de l'heure de sa signature plus de 20 min de retard signifie que son statut est update avec un retard
* Creation des promos
* Modification des status par les formateur.ices
* panneau de gestion
* role super admin

  
