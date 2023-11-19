<!DOCTYPE html>
<html lang="en">

<?php
include "../connection.php";
include "Header.php";
include "sidebar.php";
?>

<style>
    .card {
        width: 125px;
        height: 175px;
        background-color: #3498db;
        margin: 10px;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 20px;
        color: white;
        cursor: pointer;
    }

    .board {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }
</style>
</head>

<body>
    <center>
        <h1>
            <font color="green"><b>Memorama comida</b></font>
        </h1>
    </center>
    <center>
        <p>Encuentra los pares.</p>
    </center>
    <div class="board" id="board"></div>
    <script>
        const kanjiPairs = [
            { kanji: 'ピザ', hiragana: 'Pizza' },
            { kanji: 'パスタ', hiragana: 'Pasta' },
            { kanji: 'ハンバーガー', hiragana: 'Hamburguesa' },
            { kanji: 'サンドイッチ', hiragana: 'Sándwich' },
            { kanji: 'タコス', hiragana: 'Tacos' },
            { kanji: 'スパゲッティ', hiragana: 'Espagueti' },
            { kanji: 'カレー', hiragana: 'Curry' },
            { kanji: 'ラーメン', hiragana: 'Ramen' },
            { kanji: 'オムライス', hiragana: 'Omurice' },
            { kanji: 'サラダ', hiragana: 'Ensalada' }
        ];

        let cards = [];
        kanjiPairs.forEach(pair => {
            cards.push({ content: pair.kanji, match: pair.hiragana });
            cards.push({ content: pair.hiragana, match: pair.kanji });
        });

        let flippedCards = [];
        let matchedCards = [];
        let lockBoard = false;

        function shuffleArray(array) {
            return array.sort(() => Math.random() - 0.5);
        }

        function createBoard() {
            cards = shuffleArray(cards);
            const board = document.getElementById('board');

            cards.forEach((card, index) => {
                const div = document.createElement('div');
                div.classList.add('card');
                div.dataset.index = index;
                div.textContent = '?';
                div.dataset.match = card.match; // Almacena la correspondencia en hiragana
                div.addEventListener('click', flipCard);
                board.appendChild(div);
            });
        }

        function flipCard() {
            if (lockBoard || flippedCards.length >= 2) return;
            const index = this.dataset.index;
            const cardElement = this;

            cardElement.textContent = cards[index].content;
            flippedCards.push(cardElement);

            if (flippedCards.length === 2) {
                lockBoard = true;

                setTimeout(() => {
                    const [card1, card2] = flippedCards;
                    if (card1.dataset.match === card2.textContent &&
                        card2.dataset.match === card1.textContent) {
                        matchedCards.push(card1, card2);
                        flippedCards = [];

                        if (matchedCards.length === cards.length) {
                            alert('よくできました! Has encontrado todos los pares.');
                        }
                    } else {
                        card1.textContent = '?';
                        card2.textContent = '?';
                        flippedCards = [];
                    }

                    lockBoard = false;
                }, 1000);
            }
        }

        createBoard();
    </script>
    </div>
    <?php
    include "sidenav.php";
    ?>
    <center>
        <a class="btn btn-danger" href="introduccionkatakana.php" role="button">Volver a katakana</a>
    </center>
</body>

</html>