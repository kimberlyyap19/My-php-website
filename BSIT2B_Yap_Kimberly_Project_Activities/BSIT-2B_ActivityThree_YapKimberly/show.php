<link rel="stylesheet" href="css/imgstyle.css">
<br>
<?php if(isset($_POST["gen"]))
{
    $CompleteName=$_POST["fname"];
    echo "<h3>Hi! $CompleteName This is your Astrology Sign </h3>";
}?>
 
<div id="astrology"><?php 
if(isset($_POST["gen"]))
{
    $CompleteName=$_POST["fname"];
    $BirthMonth=$_POST["bmonth"];
    $Birthday=$_POST["bday"];

    if ( $BirthMonth =="january"){
        if ( $Birthday >=1 && $Birthday <=19){
            echo "<h3>BIRTH STONE </h3><br>";
            echo "<img src='img/garnet.jpg' class='bstone'><br><br>";
            echo "<h3 >ZODIAC SIGN </h3><br>";
            echo "<img src='img/capricorn-1.jpg'class='bstone'>";
        }
        elseif( $Birthday >=20 && $Birthday <=31){
            echo "<h3>BIRTH STONE </h3><br>";
            echo "<img src='img/garnet.jpg' class='bstone'><br><br>";
            echo "<h3 >ZODIAC SIGN </h3><br>";
            echo "<img src='img/aquarius-3.jpg' class='bstone'>";
        }
        else{
          echo"No Match";
        }
    }

    if ( $BirthMonth =="february"){
        if ( $Birthday >=1 && $Birthday <=18){
            echo "<h3>BIRTH STONE </h3><br>";
            echo "<img src='img/amethyst.jpg' class='bstone'><br><br>";
            echo "<h3 >ZODIAC SIGN </h3><br>";
            echo "<img src='img/aquarius-3.jpg' class='bstone'>";
        }
        elseif( $Birthday >=19 && $Birthday <=29){
            echo "<h3>BIRTH STONE </h3><br>";
            echo "<img src='img/amethyst.jpg' class='bstone'><br><br>";
            echo "<h3 >ZODIAC SIGN </h3><br>";
            echo "<img src='img/pisces-2.jpg' class='bstone'>";
        }
        else{
          echo"No Match";
        }
    }
    if ( $BirthMonth =="march"){
        if ( $Birthday >=1 && $Birthday <=20){
            echo "<h3>BIRTH STONE </h3><br>";
            echo "<img src='img/aquanarine.jpg' class='bstone'><br><br>";
            echo "<h3 >ZODIAC SIGN </h3><br>";
            echo "<img src='img/pisces-2.jpg' class='bstone'>";
        }
        elseif( $Birthday >=21 && $Birthday <=31){
            echo "<h3>BIRTH STONE </h3><br>";
            echo "<img src='img/aquanarine.jpg' class='bstone'><br><br>";
            echo "<h3 >ZODIAC SIGN </h3><br>";
            echo "<img src='img/aries-3.jpg' class='bstone'>";
        }
        else{
          echo"No Match";
        }
    }

    if ( $BirthMonth =="april"){
        if ( $Birthday >=1 && $Birthday <=19){
            echo "<h3>BIRTH STONE </h3><br>";
            echo "<img src='img/diamond.jpg' class='bstone'><br><br>";
            echo "<h3 >ZODIAC SIGN </h3><br>";
            echo "<img src='img/aries-3.jpg' class='bstone'>";
        }
        elseif( $Birthday >=20 && $Birthday <=30){
            echo "<h3>BIRTH STONE </h3><br>";
            echo "<img src='img/diamond.jpg' class='bstone'><br><br>";
            echo "<h3 >ZODIAC SIGN </h3><br>";
            echo "<img src='img/taurus-1.jpg' class='bstone'>";
        }
        else{
          echo"No Match";
        }
    }
    if ( $BirthMonth =="may"){
        if ( $Birthday >=1 && $Birthday <=20){
            echo "<h3>BIRTH STONE </h3><br>";
            echo "<img src='img/emerald.jpg' class='bstone'><br><br>";
            echo "<h3 >ZODIAC SIGN </h3><br>";
            echo "<img src='img/taurus-1.jpg' class='bstone'>";
        }
        elseif( $Birthday >=21 && $Birthday <=31){
            echo "<h3>BIRTH STONE </h3><br>";
            echo "<img src='img/emerald.jpg' class='bstone'><br><br>";
            echo "<h3 >ZODIAC SIGN </h3><br>";
            echo "<img src='img/gemini-1.jpg' class='bstone'>";
        }
        else{
          echo"No Match";
        }
    }
    if ( $BirthMonth =="june"){
        if ( $Birthday >=1 && $Birthday <=20){
            echo "<h3>BIRTH STONE </h3><br>";
            echo "<img src='img/pearl.jpeg' class='bstone'><br><br>";
            echo "<h3 >ZODIAC SIGN </h3><br>";
            echo "<img src='img/gemini-1.jpg' class='bstone'>";
        }
        elseif( $Birthday >=21 && $Birthday <=30){
            echo "<h3>BIRTH STONE </h3><br>";
            echo "<img src='img/pearl.jpeg' class='bstone'><br><br>";
            echo "<h3 >ZODIAC SIGN </h3><br>";
            echo "<img src='img/cancer-1.jpg' class='bstone'>";
        }
        else{
          echo"No Match";
        }
    }
    if ( $BirthMonth =="july"){
        if ( $Birthday >=1 && $Birthday <=22){
            echo "<h3>BIRTH STONE </h3><br>";
            echo "<img src='img/ruby.jpg' class='bstone'><br><br>";
            echo "<h3 >ZODIAC SIGN </h3><br>";
            echo "<img src='img/cancer-1.jpg' class='bstone'>";
        }
        elseif( $Birthday >=23 && $Birthday <=31){
            echo "<h3>BIRTH STONE </h3><br>";
            echo "<img src='img/ruby.jpg' class='bstone'><br><br>";
            echo "<h3 >ZODIAC SIGN </h3><br>";
            echo "<img src='img/leo-1.jpg' class='bstone'>";
        }
        else{
          echo"No Match";
        }
    }
    if ( $BirthMonth =="august"){
        if ( $Birthday >=1 && $Birthday <=22){
            echo "<h3>BIRTH STONE </h3><br>";
            echo "<img src='img/peridot.jpg' class='bstone'><br><br>";
            echo "<h3 >ZODIAC SIGN </h3><br>";
            echo "<img src='img/leo-1.jpg' class='bstone'>";
        }
        elseif( $Birthday >=23 && $Birthday <=31){
            echo "<h3>BIRTH STONE </h3><br>";
            echo "<img src='img/peridot.jpg' class='bstone'><br><br>";
            echo "<h3 >ZODIAC SIGN </h3><br>";
            echo "<img src='img/virgo-1.jpg' class='bstone'>";
        }
        else{
          echo"No Match";
        }
    }
    if ( $BirthMonth =="september"){
        if ( $Birthday >=1 && $Birthday <=22){
            echo "<h3>BIRTH STONE </h3><br>";
            echo "<img src='img/sapphire.jpg' class='bstone'><br><br>";
            echo "<h3 >ZODIAC SIGN </h3><br>";
            echo "<img src='img/virgo-1.jpg' class='bstone'>";
        }
        elseif( $Birthday >=23 && $Birthday <=30){
            echo "<h3>BIRTH STONE </h3><br>";
            echo "<img src='img/sapphire.jpg' class='bstone'><br><br>";
            echo "<h3 >ZODIAC SIGN </h3><br>";
            echo "<img src='img/libra-3.jpg' class='bstone'>";
        }
        else{
          echo"No Match";
        }
    }
    if ( $BirthMonth =="october"){
        if ( $Birthday >=1 && $Birthday <=22){
            echo "<h3>BIRTH STONE </h3><br>";
            echo "<img src='img/opal.jpeg' class='bstone'><br><br>";
            echo "<h3 >ZODIAC SIGN </h3><br>";
            echo "<img src='img/libra-3.jpg' class='bstone'>";
        }
        elseif( $Birthday >=23 && $Birthday <=31){
            echo "<h3>BIRTH STONE </h3><br>";
            echo "<img src='img/opal.jpeg' class='bstone'><br><br>";
            echo "<h3 >ZODIAC SIGN </h3><br>";
            echo "<img src='img/scorpio-1.jpg' class='bstone'>";
        }
        else{
          echo"No Match";
        }
    }
    if ( $BirthMonth =="november"){
        if ( $Birthday >=1 && $Birthday <=21){
            echo "<h3>BIRTH STONE </h3><br>";
            echo "<img src='img/topas.jpg' class='bstone'><br><br>";
            echo "<h3 >ZODIAC SIGN </h3><br>";
            echo "<img src='img/scorpio-1.jpg' class='bstone'>";
        }
        elseif( $Birthday >=22 && $Birthday <=30){
            echo "<h3>BIRTH STONE </h3><br>";
            echo "<img src='img/topas.jpg' class='bstone'><br><br>";
            echo "<h3 >ZODIAC SIGN </h3><br>";
            echo "<img src='img/sagittarius-1.jpg' class='bstone'>";
        }
        else{
          echo"No Match";
        }
    }
    if ( $BirthMonth =="december"){
        if ( $Birthday >=1 && $Birthday <=21){
            echo "<h3>BIRTH STONE </h3><br>";
            echo "<img src='img/turquoise.jpg' class='bstone'><br><br>";
            echo "<h3 >ZODIAC SIGN </h3><br>";
            echo "<img src='img/sagittarius-1.jpg' class='bstone'>";
        }
        elseif( $Birthday >=22 && $Birthday <=31){
            echo "<h3>BIRTH STONE </h3><br>";
            echo "<img src='img/turquoise.jpg' class='bstone'><br><br>";
            echo "<h3 >ZODIAC SIGN </h3><br>";
            echo "<img src='img/capricorn-1.jpg' class='bstone'>";
        }
        else{
          echo"No Match";
        }
    }
}


?></div>

<div id="about-astrology"><?php 
if(isset($_POST["gen"]))
{
    $CompleteName=$_POST["fname"];
    $BirthMonth=$_POST["bmonth"];
    $Birthday=$_POST["bday"];
    if ( $BirthMonth =="january"){
        if ( $Birthday >=1 && $Birthday <=19){
            echo "<h4>Garnet </h4><br><br>";
            echo "<p>Garnet, the birthstone of January, is mined in a rainbow of colors.
             From the fiery orange of Mandarin Garnet to the rich green of Tsavorite Garnet 
             and to the most widely recognized color of Pyrope Garnet, it is considered a 
             great gift to symbolize friendship and trust.</p><br><br><br><br>";
            echo "<h4>Capricon </h4><br><br>";
            echo "<p>Capricorn is a sign that represents time and responsibility, 
            and its representatives are traditional and often very serious by nature. 
            These individuals possess an inner state of independence that enables significant
             progress both in their personal and professional lives. They are masters of
              self-control and have the ability to lead the way, make solid and realistic plans,
               and manage many people who work for them at any time. They will learn from their 
               mistakes and get to the top based solely on their experience and expertise.</p>";
        

        }
    

        elseif( $Birthday >=20 && $Birthday <=31){
            echo "<h4>Garnet </h4><br><br>";
            echo "<p>Garnet, the birthstone of January, is mined in a rainbow of colors.
            From the fiery orange of Mandarin Garnet to the rich green of Tsavorite Garnet 
            and to the most widely recognized color of Pyrope Garnet, it is considered a 
            great gift to symbolize friendship and trust.</p><br><br><br><br><br><br><br>";
            echo "<h4>Aquarius </h4><br><br>";
            echo "<p>Aquarius is represented by the water bearer, the mystical healer who bestows
             water, or life, upon the land. Accordingly, Aquarius is the most humanitarian 
             astrological sign. These revolutionary thinkers fervently support “power to the people,” 
             aspiring to change the world through radical social progress.Aquarius is an air sign, and
              as such, uses his mind at every opportunity. If there is no mental stimulation, they are 
              bored and lack a motivation to achieve the best result.</p>";

        }
    }
        
    if ( $BirthMonth =="february"){
        if ( $Birthday >=1 && $Birthday <=18){
            echo "<h4>Amethyst </h4><br><br>";
            echo "<p>Amethyst, the birthstone of February, is a variety of Quartz that carries
             a spectacular purple color that ranges from a blend of deep violet and red to a 
             lighter lilac hue. Ancient Greeks believed that the stone protected the wearer from
              drunkenness and enabled them to keep a balanced mindset.</p><br><br><br><br><br><br>";
             echo "<h4>Aquarius </h4><br><br>";
             echo "<p>Aquarius is represented by the water bearer, the mystical healer who bestows
              water, or life, upon the land. Accordingly, Aquarius is the most humanitarian 
              astrological sign. These revolutionary thinkers fervently support “power to the people,” 
              aspiring to change the world through radical social progress.Aquarius is an air sign, and
               as such, uses his mind at every opportunity. If there is no mental stimulation, they are 
               bored and lack a motivation to achieve the best result.</p>";
        }
        elseif( $Birthday >=19 && $Birthday <=29){
            echo "<h4>Amethyst </h4><br><br>";
            echo "<p>Amethyst, the birthstone of February, is a variety of Quartz that carries
             a spectacular purple color that ranges from a blend of deep violet and red to a 
             lighter lilac hue. Ancient Greeks believed that the stone protected the wearer from
              drunkenness and enabled them to keep a balanced mindset.</p><br><br><br><br><br><br>";
             echo "<h4>Pisces </h4><br><br>";
             echo "<p>Pisces are very friendly, so they often find themselves in a company of 
             very different people. Pisces are selfless, they are always willing to help others, 
             without hoping to get anything back.Pisces is a Water sign and as such this zodiac sign
              is characterized by empathy and expressed emotional capacity.</p>";
        }
        else{
          echo"No Match";
        }
    }
    if ( $BirthMonth =="march"){
        if ( $Birthday >=1 && $Birthday <=20){
            echo "<h4>Aquamrine </h4><br><br>";
            echo "<p>Aquamarine, the birthstone of March, has a rich color 
            and has long been a symbol of youth, health and hope. Its mesmerizing
             color ranges from pale to deep blue and are reminiscent of the sea. 
             A perfect birthstone for March, the Aquamarine creates a beautiful 
             accent to spring and summer wardrobes.</p><br><br><br><br><br><br>";
             echo "<h4>Pisces </h4><br><br>";
             echo "<p>Pisces are very friendly, so they often find themselves in a company of 
             very different people. Pisces are selfless, they are always willing to help others, 
             without hoping to get anything back.Pisces is a Water sign and as such this zodiac sign
              is characterized by empathy and expressed emotional capacity.</p>";
        }
        elseif( $Birthday >=21 && $Birthday <=31){
            echo "<h4>Aquamrine </h4><br><br>";
            echo "<p>Aquamarine, the birthstone of March, has a rich color 
            and has long been a symbol of youth, health and hope. Its mesmerizing
             color ranges from pale to deep blue and are reminiscent of the sea. 
             A perfect birthstone for March, the Aquamarine creates a beautiful 
             accent to spring and summer wardrobes.</p><br><br><br><br><br><br>";
             echo "<h4>Aries</h4><br><br>";
             echo "<p>The Sun in such high dignity gives them excellent organizational 
             skills, so you'll rarely meet an Aries who isn't capable of finishing several
              things at once, often before lunch break! Their challenges show when they get 
              impatient, aggressive and vent anger pointing it to other people. Strong 
              personalities born under this sign have a task to fight for their goals, embracing
               togetherness and teamwork through this incarnation.</p>";
        }
        else{
          echo"No Match";
        }
    }

    if ( $BirthMonth =="april"){
        if ( $Birthday >=1 && $Birthday <=19){
            echo "<h4>Diamond </h4><br><br>";
            echo "<p>Diamonds, the birthstone of April, are commonly associated with love which
             make it the perfect gift for a loved one. While white diamonds are most common, fancy 
             colored diamonds can be found in various colors including yellow, blue, pink and a
              variety of others as well.</p><br><br><br><br>";
             echo "<h4>Aries</h4><br><br>";
             echo "<p>The Sun in such high dignity gives them excellent organizational 
             skills, so you'll rarely meet an Aries who isn't capable of finishing several
              things at once, often before lunch break! Their challenges show when they get 
              impatient, aggressive and vent anger pointing it to other people. Strong 
              personalities born under this sign have a task to fight for their goals, embracing
               togetherness and teamwork through this incarnation.</p>";
        }
        elseif( $Birthday >=20 && $Birthday <=30){
            echo "<h4>Diamond </h4><br><br>";
            echo "<p>Diamonds, the birthstone of April, are commonly associated with love which
             make it the perfect gift for a loved one. While white diamonds are most common, fancy 
             colored diamonds can be found in various colors including yellow, blue, pink and a
              variety of others as well.</p><br><br><br><br>";
             echo "<h4>Taurus</h4><br><br>";
             echo "<p>Taurus is an Earth sign, just like Virgo and Capricorn, and has the ability to 
             see things from a grounded, practical and realistic perspective. They find it easy to
              make money and stay on same projects for years, or until they are completed. What we 
              often see as stubbornness can be interpreted as commitment, and their ability to 
              complete tasks whatever it takes is uncanny. This makes them excellent employees, great
               long-term friends and partners, always being there for people they love. Earthly note
                makes them overprotective, conservative, or materialistic at times, with views of the
                 world founded on their love of money and wealth.</p>";
        }
        else{
          echo"No Match";
        }
    }
    if ( $BirthMonth =="may"){
        if ( $Birthday >=1 && $Birthday <=20){
            echo "<h4>Emerald </h4><br><br>";
            echo "<p>Emerald, the birthstone of May, carries the rich green color of Spring and radiates
             a beautiful vivid tone. They are considered to be a symbol of rebirth and love. Emeralds
              are the rarest gemstones and are typically mined in Colombia, Brazil, Afghanistan and Zambia.</p><br><br><br><br><br><br>";
             echo "<h4>Taurus</h4><br><br>";
             echo "<p>Taurus is an Earth sign, just like Virgo and Capricorn, and has the ability to 
             see things from a grounded, practical and realistic perspective. They find it easy to
              make money and stay on same projects for years, or until they are completed. What we 
              often see as stubbornness can be interpreted as commitment, and their ability to 
              complete tasks whatever it takes is uncanny. This makes them excellent employees, great
               long-term friends and partners, always being there for people they love. Earthly note
                makes them overprotective, conservative, or materialistic at times, with views of the
                 world founded on their love of money and wealth.</p>";
        }
        elseif( $Birthday >=21 && $Birthday <=31){
            echo "<h4>Emerald </h4><br><br>";
            echo "<p>Emerald, the birthstone of May, carries the rich green color of Spring and radiates
             a beautiful vivid tone. They are considered to be a symbol of rebirth and love. Emeralds
              are the rarest gemstones and are typically mined in Colombia, Brazil, Afghanistan and Zambia.</p><br><br><br><br><br><br><br>";
             echo "<h4>Gemini</h4><br><br>";
             echo "<p>Gemini represents two different personalities in 
             one and you will never be sure which one you will face. They are sociable, 
             communicative and ready for fun, with a tendency to suddenly get serious, thoughtful
              and restless. They are fascinated with the world itself, extremely curious,
               with a constant feeling that there is not enough time to experience everything they want to see.</p>";
        }
        else{
          echo"No Match";
        }
    }
    if ( $BirthMonth =="june"){
        if ( $Birthday >=1 && $Birthday <=20){
            echo "<h4>Pearl </h4><br><br>";
            echo "<p>June birthdays claim two birthstones; pearl and Alexandrite.
             Pearls have been wildly popular in jewelry for centuries because of their natural beauty.
              Alexandrite gemstones are extremely rare and desirable since they 
              change color based on the lighting.</p><br><br><br><br>";
             echo "<h4>Gemini</h4><br><br>";
             echo "<p>Gemini represents two different personalities in 
             one and you will never be sure which one you will face. They are sociable, 
             communicative and ready for fun, with a tendency to suddenly get serious, thoughtful
              and restless. They are fascinated with the world itself, extremely curious,
               with a constant feeling that there is not enough time to experience everything they want to see.</p>";
        }
        elseif( $Birthday >=21 && $Birthday <=30){
            echo "<h4>Pearl </h4><br><br>";
            echo "<p>June birthdays claim two birthstones; pearl and Alexandrite.
             Pearls have been wildly popular in jewelry for centuries because of their natural beauty.
              Alexandrite gemstones are extremely rare and desirable since they 
              change color based on the lighting.</p><br><br><br><br>";
             echo "<h4>Cancer</h4><br><br>";
             echo "<p>Cancer - the Brave Crab Sent to this Earth by something they believe in,
              only to mess with someone bigger than they are, this isn't an animal aware of their
               strength. Patriotism can make them endanger their own wellbeing, fighting for someone 
               else's cause, as if others can become their higher power. The Crab knows where they're 
               going, but this is often in a wrong direction, at least until they learn their lessons 
               and start relying solely on themselves.</p>";
        }
        else{
          echo"No Match";
        }
    }
    if ( $BirthMonth =="july"){
        if ( $Birthday >=1 && $Birthday <=22){
            echo "<h4>Ruby </h4><br><br>";
            echo "<p>Rubies, the birthstone of July, are considered the king of gems and
             represent love, health and wisdom. It was believed wearing a fine red Ruby bestowed 
             good fortune on its owner. A Ruby is the most valuable gemstone and its value increases
              based on its color and quality.</p><br><br><br><br><br><br><br>";
             echo "<h4>Cancer</h4><br><br>";
             echo "<p>Cancer - the Brave Crab Sent to this Earth by something they believe in,
              only to mess with someone bigger than they are, this isn't an animal aware of their
               strength. Patriotism can make them endanger their own wellbeing, fighting for someone 
               else's cause, as if others can become their higher power. The Crab knows where they're 
               going, but this is often in a wrong direction, at least until they learn their lessons 
               and start relying solely on themselves.</p>";
        }
        elseif( $Birthday >=23 && $Birthday <=31){
            echo "<h4>Ruby </h4><br><br>";
            echo "<p>Rubies, the birthstone of July, are considered the king of gems and
             represent love, health and wisdom. It was believed wearing a fine red Ruby bestowed 
             good fortune on its owner. A Ruby is the most valuable gemstone and its value increases
              based on its color and quality.</p><br><br><br><br><br><br>";
             echo "<h4>Leo</h4><br><br>";
             echo "<p>Leo - the Lion in the Cave The story of the Lion always speaks of bravery.
              This is an animal fearless and impossible to challenge, hurt or destroy, their only 
              weaknesses being fear and aggression towards those they confront. Living in a cave,
               a Lion always needs to have one, nesting and finding comfort in hard times. However, 
               they should never stay there for long. With their head high, they have to face others 
               with dignity and respect, never raising a voice, a hand, or a weapon, bravely walking 
               through the forest they rule.</p>";
        }
        else{
          echo"No Match";
        }
    }
    if ( $BirthMonth =="august"){
        if ( $Birthday >=1 && $Birthday <=22){
            echo "<h4>Peridot </h4><br><br>";
            echo "<p>August is the latest month to claim two birthstones; Peridot and Spinel. 
            Peridot, with it’s signature lime green color, is believed to instill power and 
            influence in the wearer. Spinel is available in a brilliant range of colors and is 
            believed to protect the owner from harm and soothe away sadness.</p><br><br><br><br><br><br>";
             echo "<h4>Leo</h4><br><br>";
             echo "<p>Leo - the Lion in the Cave The story of the Lion always speaks of bravery.
              This is an animal fearless and impossible to challenge, hurt or destroy, their only 
              weaknesses being fear and aggression towards those they confront. Living in a cave,
               a Lion always needs to have one, nesting and finding comfort in hard times. However, 
               they should never stay there for long. With their head high, they have to face others 
               with dignity and respect, never raising a voice, a hand, or a weapon, bravely walking 
               through the forest they rule.</p>";
        }
        elseif( $Birthday >=23 && $Birthday <=31){
            echo "<h4>Peridot </h4><br><br>";
            echo "<p>August is the latest month to claim two birthstones; Peridot and Spinel. 
            Peridot, with it’s signature lime green color, is believed to instill power and 
            influence in the wearer. Spinel is available in a brilliant range of colors and is 
            believed to protect the owner from harm and soothe away sadness.</p><br><br><br><br><br><br>";
             echo "<h4>Virgo</h4><br><br>";
             echo "<p>Virgo – the Disappointed Goddess Seeking goodness in humankind is the 
             story of Virgo, and disappointment seems to be inevitable from their point of view.
              The first time they came from their cloud and jumped onto planet Earth, it felt like 
              their mission is to use their existence for good, discovering ways of justice and 
              purity in other people. Once they fail to find it too many times, Virgos will pull away,
              get lost, turn to substance abuse, or simply separate from other people to sit on the bench, 
              criticize and judge.</p>";
        }
        else{
          echo"No Match";
        }
    }
    if ( $BirthMonth =="september"){
        if ( $Birthday >=1 && $Birthday <=22){
            echo "<h4>Sapphire </h4><br><br>";
            echo "<p>Sapphire, the birthstone of September, is most desired in its pure, 
            rich blue color but is present in almost every color including pink, yellow and
             green. In the Middle Ages the gem was believed to protect those close to you from 
             harm and also represented loyalty and trust.</p><br><br><br><br><br><br><br><br>";
             echo "<h4>Virgo</h4><br><br>";
             echo "<p>Virgo – the Disappointed Goddess Seeking goodness in humankind is the 
             story of Virgo, and disappointment seems to be inevitable from their point of view.
              The first time they came from their cloud and jumped onto planet Earth, it felt like 
              their mission is to use their existence for good, discovering ways of justice and 
              purity in other people. Once they fail to find it too many times, Virgos will pull away,
              get lost, turn to substance abuse, or simply separate from other people to sit on the bench, 
              criticize and judge.</p>";
        }
        elseif( $Birthday >=23 && $Birthday <=30){
            echo "<h4>Sapphire </h4><br><br>";
            echo "<p>Sapphire, the birthstone of September, is most desired in its pure, 
            rich blue color but is present in almost every color including pink, yellow and
             green. In the Middle Ages the gem was believed to protect those close to you from 
             harm and also represented loyalty and trust.</p><br><br><br><br><br>";
             echo "<h4>Libra</h4><br><br>";
             echo "<p>Libra – The Measure of Our Souls The shortest myth of them all seems to present 
             a good analogy to the shortest constellation in the sky, you might even say that it is
              non-existent, presented by the pliers of Scorpio. Libra is one dot of balance in the sea 
              of different extremes, manifested only through the fifteenth degree of this magnificent 
              sign, an object among animals and people. There is something awfully insecure about Libra,
               as if they were unsure which plate to burden next, aware that things pass and teach us to 
               be careful around other people. Whatever we do in our lifetimes, only serves to point the 
               way for our Souls towards that “higher power” to finally measure our existence. Telling us
                where we went wrong or what we did right, Libras unconsciously teach us that true 
                liberation hides in lightness.</p>";
        }
        else{
          echo"No Match";
        }
    }
    if ( $BirthMonth =="october"){
        if ( $Birthday >=1 && $Birthday <=22){
            echo "<h4>Opal </h4><br><br>";
            echo "<p>October also has two birthstones; Tourmaline and Opal. 
            Tourmaline is a favorite gemstone for many because it’s available in 
            a rainbow of beautiful colors. Opal gemstones are truly unique because each
             individual gem is adorned with a one-of-a-kind color combination.</p><br><br><br><br><br>";
             echo "<h4>Libra</h4><br><br>";
             echo "<p>Libra – The Measure of Our Souls The shortest myth of them all seems to present 
             a good analogy to the shortest constellation in the sky, you might even say that it is
              non-existent, presented by the pliers of Scorpio. Libra is one dot of balance in the sea 
              of different extremes, manifested only through the fifteenth degree of this magnificent 
              sign, an object among animals and people. There is something awfully insecure about Libra,
               as if they were unsure which plate to burden next, aware that things pass and teach us to 
               be careful around other people. Whatever we do in our lifetimes, only serves to point the 
               way for our Souls towards that “higher power” to finally measure our existence. Telling us
                where we went wrong or what we did right, Libras unconsciously teach us that true 
                liberation hides in lightness.</p>";
        }
        elseif( $Birthday >=23 && $Birthday <=31){
            echo "<h4>Opal </h4><br><br>";
            echo "<p>October also has two birthstones; Tourmaline and Opal. 
            Tourmaline is a favorite gemstone for many because it’s available in 
            a rainbow of beautiful colors. Opal gemstones are truly unique because each
             individual gem is adorned with a one-of-a-kind color combination.</p><br><br><br><br><br><br><br>";
             echo "<h4>Scorpio</h4><br><br>";
             echo "<p>Scorpio-born are passionate and assertive people. They are determined and decisive,
              and will research until they find out the truth. Scorpio is a great leader, always aware of 
              the situation and also features prominently in resourcefulness. Scorpio is a Water sign and
               lives to experience and express emotions. Although emotions are very important for Scorpio,
               they manifest them differently than other water signs. In any case, you can be sure that the 
               orpio will keep your secrets, whatever they may be.</p>";
        }
        else{
          echo"No Match";
        }
    }
    if ( $BirthMonth =="november"){
        if ( $Birthday >=1 && $Birthday <=21){
            echo "<h4>Topaz </h4><br><br>";
            echo "<p>November birthdays are associated with two gems; Citrine and Topaz. 
            The warm color of Citrine is said to be a gift from the sun and it’s believed to be
             a healing gemstone. Topaz is most desired in its rich orange Imperial Topaz color but
              it is found in a variety of rich colors like blue, pink and yellow.</p><br><br><br><br><br>";
             echo "<h4>Scorpio</h4><br><br>";
             echo "<p>Scorpio-born are passionate and assertive people. They are determined and decisive,
              and will research until they find out the truth. Scorpio is a great leader, always aware of 
              the situation and also features prominently in resourcefulness. Scorpio is a Water sign and
               lives to experience and express emotions. Although emotions are very important for Scorpio,
               they manifest them differently than other water signs. In any case, you can be sure that the 
               orpio will keep your secrets, whatever they may be.</p>";
        }
        elseif( $Birthday >=22 && $Birthday <=30){
            echo "<h4>Topaz </h4><br><br>";
            echo "<p>November birthdays are associated with two gems; Citrine and Topaz. 
            The warm color of Citrine is said to be a gift from the sun and it’s believed to be
             a healing gemstone. Topaz is most desired in its rich orange Imperial Topaz color but
              it is found in a variety of rich colors like blue, pink and yellow.</p><br><br><br><br><br><br>";
             echo "<h4>Sagittarius</h4><br><br>";
             echo "<p>, Sagittarius is one of the biggest travelers among all zodiac signs. 
             Their open mind and philosophical view motivates them to wander around the world in search of the meaning of life.
             Sagittarius is extrovert, optimistic and enthusiastic, and likes changes. 
             Sagittarius-born are able to transform their thoughts into concrete actions and they will do anything to achieve their goals.
             </p>";
        }
        else{
          echo"No Match";
        }
    }
    if ( $BirthMonth =="december"){
        if ( $Birthday >=1 && $Birthday <=21){
            echo "<h4>Turquoise </h4><br><br>";
            echo "<p>December birthdays have claim to three gemstones; Zircon, Tanzanite and Turquoise. 
            Each of these gemstones carries a unique blue tone making it a perfect birthstone for
             Minnesota’s frigid December winters. Zircon can be found in a variety of colors, but blue 
             is the overwhelming favorite.</p><br><br><br><br><br><br>";
             echo "<h4>Sagittarius</h4><br><br>";
             echo "<p>, Sagittarius is one of the biggest travelers among all zodiac signs. 
             Their open mind and philosophical view motivates them to wander around the world in search of the meaning of life.
             Sagittarius is extrovert, optimistic and enthusiastic, and likes changes. 
             Sagittarius-born are able to transform their thoughts into concrete actions and they will do anything to achieve their goals.
             </p>";
        }
        elseif( $Birthday >=22 && $Birthday <=31){
            echo "<h4>Turquoise </h4><br><br>";
            echo "<p>December birthdays have claim to three gemstones; Zircon, Tanzanite and Turquoise. 
            Each of these gemstones carries a unique blue tone making it a perfect birthstone for
             Minnesota’s frigid December winters. Zircon can be found in a variety of colors, but blue 
             is the overwhelming favorite.</p><br><br><br><br><br><br>";
             echo "<h4>Capricon </h4><br><br>";
             echo "<p>Capricorn is a sign that represents time and responsibility, 
             and its representatives are traditional and often very serious by nature. 
             These individuals possess an inner state of independence that enables significant
              progress both in their personal and professional lives. They are masters of
               self-control and have the ability to lead the way, make solid and realistic plans,
                and manage many people who work for them at any time. They will learn from their 
                mistakes and get to the top based solely on their experience and expertise.</p>";
             
        }
        else{
          echo"No Match";
        }
    }
    }



?></div>