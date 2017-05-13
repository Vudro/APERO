<?php// MODELclass MainModel extends PDO{    private $arr_executed_sql = [];    function __construct()    {        parent::__construct('mysql:host=' . DB_HOST . ';port=3306;dbname=' . DB_NAME . ';charset=UTF8;', DB_LOGIN, DB_PASS);        $this->query('SET NAMES utf8;');    }    function execQuery($request)    {        $rest = $this->query($request)->fetchAll(PDO::FETCH_ASSOC);        $this->arr_executed_sql[] = $request;        return $rest;    }    function execInsert($request)    {        $rest = $this->exec($request);        $this->arr_executed_sql[] = $request;        return $rest;    }    function getLastQuery()    {        return end($this->arr_executed_sql);    }    function afficherEnfantFamille()    {        return $this->execQuery('SELECT Enfants.PrenomEnfant, Famille.NomFamille, Famille.AdresseFamille FROM Famille INNER JOIN Enfants ON Famille.IdFamille = Enfants.IdFamille;');    }    function afficherEnfant()    {        return $this->execQuery('SELECT Enfants.PrenomEnfant, Enfants.NomEnfant, Classe.NiveauClasse, Classe.Section FROM Classe INNER JOIN Enfants ON Classe.idClasse = Enfants.IdClasse;');    }    function afficherEtablissement()    {        return $this->execQuery('SELECT * FROM etablissement;');    }    function afficherLivreClasse()    {        return $this->execQuery('SELECT * FROM classe INNER JOIN livre ON classe.idc=livre.idc;');    }    function afficherMatiere()    {        return $this->execQuery('SELECT * FROM matiere;');    }    function afficherClasse()    {        return $this->execQuery('SELECT * FROM classe;');    }    function afficherLivre()    {        return $this->execQuery('SELECT Livre.NomLivre, Livre.EditionLivre, Livre.PrixNeuf, Livre.Matière FROM Livre;');    }    function exemplaireFamille()    {        return $this->execQuery('SELECT Famille.IdFamille, Famille.NomFamille, Livre.NomLivre, Exemplaire.EtatExemplaire, Livre.Matière, Livre.EditionLivre                                  FROM Livre RIGHT JOIN (Exemplaire RIGHT JOIN Famille ON Exemplaire.Id_Famille_Vendeur = Famille.IdFamille) ON Livre.IdLivre = Exemplaire.Id_Livre                                  WHERE (((Famille.IdFamille)=[Id_Famille_Vendeur]) AND ((Exemplaire.EtatExemplaire)="Non Vendu"));');    }    function exemplaireVendu()    {        return $this->execQuery('SELECT Famille.IdFamille, Livre.NomLivre, Exemplaire.EtatExemplaire, Famille.IdFamille                                  FROM Livre RIGHT JOIN (Exemplaire RIGHT JOIN Famille ON Exemplaire.Id_Famille_Vendeur = Famille.IdFamille) ON Livre.IdLivre = Exemplaire.Id_Livre                                  WHERE (((Exemplaire.EtatExemplaire)="Vendu"));');    }    function exemplaireAcheter()    {        return $this->execQuery('SELECT Livre.NomLivre, Livre.Matière, Livre.EditionLivre, Famille.NomFamille, Famille.IdFamille                                  FROM (Livre RIGHT JOIN Exemplaire ON Livre.IdLivre = Exemplaire.Id_Livre) RIGHT JOIN Famille ON Exemplaire.Id_famille_Acheteur = Famille.IdFamille                                  WHERE (((Famille.IdFamille)=[Exemplaire].[Id_famille_Acheteur]) AND ((Exemplaire.EtatExemplaire)="Vendu"));');    }    function afficherFamille()    {        return $this->execQuery('SELECT Famille.NomFamille, Famille.AdresseFamille, Famille.CpFamille, Famille.VilleFamille, Famille.TelFamille, Famille.MailFamille FROM Famille;');    }}