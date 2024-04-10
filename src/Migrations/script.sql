#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: Role
#------------------------------------------------------------

CREATE TABLE Role(
        Id_Role  Int  Auto_increment  NOT NULL ,
        Nom_Role Varchar (255) NOT NULL
	,CONSTRAINT Role_PK PRIMARY KEY (Id_Role)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: User
#------------------------------------------------------------

CREATE TABLE User(
        Id_User      Int  Auto_increment  NOT NULL ,
        Nom          Varchar (50) NOT NULL ,
        Prenom       Varchar (50) NOT NULL ,
        Password     Varchar (255) NOT NULL ,
        Compte_Actif Bool NOT NULL ,
        Email        Varchar (50) NOT NULL ,
        Id_Role      Int NOT NULL
	,CONSTRAINT User_AK UNIQUE (Email)
	,CONSTRAINT User_PK PRIMARY KEY (Id_User)

	,CONSTRAINT User_Role_FK FOREIGN KEY (Id_Role) REFERENCES Role(Id_Role)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Promo
#------------------------------------------------------------

CREATE TABLE Promo(
        Id_Promo          Int  Auto_increment  NOT NULL ,
        Nom_Promo         Varchar (50) NOT NULL ,
        Date_Debut        Datetime NOT NULL ,
        Date_Fin          Datetime NOT NULL ,
        Nombre_Apprenants Int NOT NULL
	,CONSTRAINT Promo_PK PRIMARY KEY (Id_Promo)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Cours
#------------------------------------------------------------

CREATE TABLE Cours(
        Id_Cours    Int  Auto_increment  NOT NULL ,
        Nom_Cours   Varchar (50) NOT NULL ,
        Debut_Cours Datetime NOT NULL ,
        Fin_Cours   Datetime NOT NULL ,
        Code        Int NOT NULL ,
        Id_Promo    Int NOT NULL
	,CONSTRAINT Cours_PK PRIMARY KEY (Id_Cours)

	,CONSTRAINT Cours_Promo_FK FOREIGN KEY (Id_Promo) REFERENCES Promo(Id_Promo)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Fait Partie
#------------------------------------------------------------

CREATE TABLE Fait_Partie(
        Id_Promo Int NOT NULL ,
        Id_User  Int NOT NULL
	,CONSTRAINT Fait_Partie_PK PRIMARY KEY (Id_Promo,Id_User)

	,CONSTRAINT Fait_Partie_Promo_FK FOREIGN KEY (Id_Promo) REFERENCES Promo(Id_Promo)
	,CONSTRAINT Fait_Partie_User0_FK FOREIGN KEY (Id_User) REFERENCES User(Id_User)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Peut Etre
#------------------------------------------------------------

CREATE TABLE Peut_Etre(
        Id_Cours Int NOT NULL ,
        Id_User  Int NOT NULL ,
        Absent   Bool NOT NULL ,
        Retard   Bool NOT NULL
	,CONSTRAINT Peut_Etre_PK PRIMARY KEY (Id_Cours,Id_User)

	,CONSTRAINT Peut_Etre_Cours_FK FOREIGN KEY (Id_Cours) REFERENCES Cours(Id_Cours)
	,CONSTRAINT Peut_Etre_User0_FK FOREIGN KEY (Id_User) REFERENCES User(Id_User)
)ENGINE=InnoDB;

