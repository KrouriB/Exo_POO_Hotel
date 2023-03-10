Exercice sur les POO sur php pour compredre comment lié des classe entre elle en utilisant une class qui sera un lien entre les classes.
La classe Chambre a des fonction pour donner l'etat (prise ou non) et si elle est en possesion de wifi et a pour argument un hotel pour ajouter a sa liste d'appartenance.
La classe Hotel a une liste de resrvation et une liste de chambre remplie d'objet de classe de même nom , elle a 3 fonction d'affichage :
    une pour afficher les information d'un hotel
    une autre pour afficher lesreservation d'un hotel
    une derniere pour afficer les chambre d'un hotel
La classe Client a une liste de reservation et a une fonction d'affichage des reservations.
La classe Reservation a pour argument un objet de class Chambre et un de classe Client , a noter que la reservation mise dans la liste de même nom est acceder via chambre qui a pour argument le dit hotel
