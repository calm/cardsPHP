#cardsPHP
ReadMe

This demo is a single load page, it show status of objects, call a method and then display the status of objects again. 

**Objects**

1) playersModel: 
          extends the Main Model Object
          at constructor load 3 default players
          method getPlayers() returns an array with the players loaded
          method getNumberOfPlayers() returns the number of players loaded
          method receiveCard($idperson,$idcard) asign a card to a player
          
2) cardsModel:
          extends the Main Model Object
          at constructor call private method loadCards in order to fill the local var cards
          method getNumberOfCards() returns the number of cards loaded
          method getNumberOfRemainingCards() returns the number of cards that has not being served yet
          method getCards() returns an array with the cards
          method serveCard() returns the id of a card and set it as served in the cards array
          
3) gameController:
          extends the Main Controller Object
          at constructor instanciate a cardsModel object and a playersModel object
          method serveFullHand() serves 3 random cards to each player
          method getGameStatus() returns a string with the status of all objects involved.

4) index:
          extends the Main View Object
          at constructor assign default values to header and footer
          method render() display the html page

**Instructions (demo):**

1) download the main folder publish it into a PHP server and load cardsPHP/index.php.


**Dependencies:**

1) PHP5
