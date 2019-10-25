/**
 * Created by anton on 9/9/2018.
 */
var quotes = [
    'Beautiful',
    'The most wonderful person I have ever and will ever know',
    'So kind and caring, anybody would be lucky to have you, I know I am',
    'Funny, you always make me smile and laugh',
    'So amazing, you never fail to brighten my day, you make me so happy',
    'So precious',
    'The most special person in the whole wide world',
    'So strong, always able to persevere and overcome anything in front of you',
]

function newQuote(){
    var randomNumber = Math.floor(Math.random() * (quotes.lenght));
    document.getElementById('quoteDisplay').innerHTML = quotes[randomNumber];
}