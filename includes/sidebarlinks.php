<div class="quote-container">
    <h1></h1>
    <div class="tag"></div>
    <div class="quote-inner">
        <blockquote id="quoteBody"></blockquote>
        <div id="authorBody"></div>
        <!-- <button id="nxtQuote" class="quote-button">Next Quote</button> -->
    </div>
</div>
<script>
$(document).ready(function() {
    var quotes = [
        "Those who can imagine anything can create the impossible.",
        "The most precious thing that we all have with us is time.",
        "Books are the means by which we build bridges between culturess",
        "If you double the number of experiments you do per year you're going to double your inventiveness",
        "I alone cannot change the world, but I can cast a stone across the waters to create many ripples",
        "The infinite library of the Universe is in your mind.",
        "All of us do not have equal talent. But, all of us have an equal opportunity to develop our talents.",
        "The priority should be to improve the quality of teaching, introduce new tools and technology and enhance the course-wise credit.",
        "Leadership is all about courage to dream BIG.",
    ];
    var author = [
        "Alan Turing",
        "Steve Jobs",
        "Sarvepalli Radhakrishnan",
        "Jeff Bezos",
        "Mother Teresa",
        "Swami Vivekananda",
        "Dr. A.P.J. Abdul Kalam",
        "Sam Pitroda",
        "Narayan Murthy"
    ];

    fetchQuote(quotes, author);
    $("#nxtQuote").click(function() {
        fetchQuote(quotes, author);
        $("#quoteBody");
    });

    function fetchQuote(q, a) {
        var quoteNum = Math.floor(Math.random() * quotes.length);
        $("#quoteBody").text('' + q[quoteNum] + '');
        $("#authorBody").text("-" + a[quoteNum]);
    }
});
</script>