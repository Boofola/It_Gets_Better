<?php

/**
 * @package It-Gets-Better
 * @version 1.1.1
 * Plugin Name: It Get's Better!
 * Plugin URI: https://boofolaworks.com/wp-plugins/it-gets-better
 * Description: A simple little plugin that tries to give hope while you work by randomly showing inspirational quotes in the upper right corner of your admin dashboard.
 * Author: BoofolaWorks.com
 * Version: 1.1.1
 * Author URI: https://boofolallc.com
 * Contributors: BoofolaWorks.com, BOOFOLA LLC, Todd Stratton
**/


/* Start Adding Functions Below this Line */

function it_gets_better_get_quotes() {
	/** These are the quotes to inspire! */
	$quotes = "Smile at strangers and you just might change a life. 
It only takes a split second to smile and forget, yet to someone that needed it that smile can last a lifetime.
The greatest glory in living lies not in never falling, but in rising every time we fall.
If you’re reading this… Congratulations, you’re alive. If that’s not something to smile about, then I don’t know what is.
The way to get started is to quit talking and begin doing.
Smile! It increases your face value.
No Matter What Is Happening In Your Life, It Really Does Get BETTER! - Todrick Hall
Your time is limited, so don't waste it living someone else's life.
If life were predictable it would cease to be life, and be without flavor.
Don't be trapped by dogma, which is living with the results of other people's thinking.
Smile, it’s free therapy.
Use your smile to change the world; don’t let the world change your smile.
If you look at what you have in life, you'll always have more. If you look at what you don't have in life, you'll never have enough.
A smile is a curve that sets everything straight.
Today, give a stranger one of your smiles. It might be the only sunshine he sees all day.
Spread love everywhere you go. Let no one ever come to you without leaving happier.
Always find opportunities to make someone smile and offer random acts of kindness in everyday life.
When you reach the end of your rope, tie a knot in it and hang on.
Always remember that you are absolutely unique. Just like everyone else.
Don't judge each day by the harvest you reap but by the seeds that you plant.
The future belongs to those who believe in the beauty of their dreams.
Tell me and I forget. Teach me and I remember. Involve me and I learn.
The best and most beautiful things in the world cannot be seen or even touched, they must be felt with the heart.
It is during our darkest moments that we must focus to see the light.
Whoever is happy will make others happy too.
Do not go where the path may lead, go instead where there is no path and leave a trail.
Life is what happens when you're busy making other plans.
A gentle word, a kind look, and a good-natured smile can work wonders and accomplish miracles.
A warm smile is the universal language of kindness.
A smile is a universal welcome.
If you set your goals ridiculously high and it's a failure, you will fail above everyone else's success.
A smiling face is a beautiful face. A smiling heart is a happy heart.
Life is like a mirror. Smile at it and it smiles back at you.
A smile is a friend maker.
Nothing you wear is more important than your smile.
You’ll find that life is still worthwhile if you just smile.
A smile is a happiness you’ll find right under your nose.
Sometimes your joy is the source of your smile, but sometimes your smile can be the source of your joy.
A smile remains the most inexpensive gift I can bestow on anyone and yet its powers can vanquish kingdoms.
Smile, it's the key that fits the lock of everybody’s heart.
Lighten up, just enjoy life, smile more, laugh more, and don’t get so worked up about things.
One of the most rewarding things in life is to always put a smile on your face.
If you smile when you are alone, then you really mean it.
Spread love everywhere you go. Let no one ever come to you without leaving happier.
When you reach the end of your rope, tie a knot in it and hang on.
Always remember that you are absolutely unique. Just like everyone else.
Don't judge each day by the harvest you reap but by the seeds that you plant.
The future belongs to those who believe in the beauty of their dreams.
Wrinkles should merely indicate where smiles have been.
Smiling is the best way to face every problem, crush every fear, and hide every pain.
Never regret anything that made you smile.
It’s hard not to feel happy when you make someone smile.
You will face many defeats in life, but never let yourself be defeated.
The greatest glory in living lies not in never falling, but in rising every time we fall.
In the end, it's not the years in your life that count. It's the life in your years.
Never let the fear of striking out keep you from playing the game.
Life is either a daring adventure or nothing at all.
If life were predictable it would cease to be life and be without flavor.
In the end, it's not the years in your life that count. It's the life in your years.
Life is a succession of lessons which must be lived to be understood.
Many of life's failures are people who did not realize how close they were to success when they gave up.
You have brains in your head. You have feet in your shoes. You can steer yourself in any direction you choose.
Anyone can smile on their best day. I like to meet a man who can smile on his WORST.
The world always looks brighter from behind a smile.
Life is never fair, and perhaps it is a good thing for most of us that it is not.
The only impossible journey is the one you never begin.
In this life, we cannot do great things. We can only do small things with great love.
Only a life lived for others is a life worthwhile.
Life is what happens when you're busy making other plans." -John Lennon
Logic is the beginning of wisdom, not the end.”–Spock
Highly illogical. –Spock
Live long, and prosper.
Things are only impossible until they’re not.
Insufficient facts always invite danger.
Compassion: that’s the one thing no machine ever had. Maybe it’s the one thing that keeps men ahead of them.
We prefer to help ourselves. We make mistakes, but we’re human–and maybe that’s the word that best explains us.
Improve a mechanical device and you may double productivity. But improve man, you gain a thousandfold.
I am pleased to see that we have differences. May we together become greater than the sum of both of us.
It is possible to commit no errors and still lose. That is not a weakness. That is life.
I canna’ change the laws of physics. – Scotty
One man cannot summon the future. –Spock
But one man can change the present! –Kirk
“Change is the essential process of all existence. –Spock
“It is the lot of ‘man’ to strive no matter how content he is. –Spock
“Computers make excellent and efficient servants, but I have no wish to serve under them. –Spock
“Without freedom of choice there is no creativity. –Captain James T. Kirk
“You can use logic to justify almost anything. That’s its power. And its flaw. –Captain Cathryn Janeway
“There is a way out of every box, a solution to every puzzle; it’s just a matter of finding it. –Captain Jean-Luc Picard
“To boldly go where no man has gone before. –Captain James T. Kirk
You only live once, but if you do it right, once is enough. -Mae West

23. "Live in the sunshine, swim the sea, drink the wild air. -Ralph Waldo Emerson

24. "Go confidently in the direction of your dreams! Live the life you've imagined. -Henry David Thoreau

25. "The greatest glory in living lies not in never falling, but in rising every time we fall.
Life is really simple, but we insist on making it complicated. -Confucius

27. "May you live all the days of your life. -Jonathan Swift

28. "Life itself is the most wonderful fairy tale. -Hans Christian Andersen

29. "Do not let making a living prevent you from making a life. -John Wooden

30. "Life is ours to be spent, not to be saved.
Keep smiling, because life is a beautiful thing and there's so much to smile about. -Marilyn Monroe
Life is a long lesson in humility. -James M. Barrie
In three words I can sum up everything I've learned about life: it goes on. -Robert Frost
Love the life you live. Live the life you love. -Bob Marley
Life is either a daring adventure or nothing at all. -Helen Keller
You have brains in your head. You have feet in your shoes. You can steer yourself any direction you choose. -Dr. Seuss
Life is made of ever so many partings welded together. -Charles Dickens
Your time is limited, so don't waste it living someone else's life. Don't be trapped by dogma — which is living with the results of other people's thinking. -Steve Jobs
Life is trying things to see if they work. -Ray Bradbury
Many of life's failures are people who did not realize how close they were to success when they gave up. -Thomas A. Edison
Your time is limited, so don't waste it living someone else's life. Don't be trapped by dogma — which is living with the results of other people's thinking." -Steve Jobs
Life is trying things to see if they work." -Ray Bradbury
Many of life's failures are people who did not realize how close they were to success when they gave up.
Success is not final; failure is not fatal: It is the courage to continue that counts. -Winston S. Churchill
Success usually comes to those who are too busy to be looking for it. -Henry David Thoreau
The way to get started is to quit talking and begin doing. -Walt Disney
If you really look closely, most overnight successes took a long time. -Steve Jobs
The secret of success is to do the common thing uncommonly well. -John D. Rockefeller Jr.
I find that the harder I work, the more luck I seem to have. -Thomas Jefferson
The real test is not whether you avoid this failure, because you won't. It's whether you let it harden or shame you into inaction, or whether you learn from it; whether you choose to persevere. -Barack Obama
41. "The secret of success is to do the common thing uncommonly well. -John D. Rockefeller Jr.

42. "I find that the harder I work, the more luck I seem to have. -Thomas Jefferson

43. "Success is not final; failure is not fatal: It is the courage to continue that counts. -Winston S. Churchill

44. "The way to get started is to quit talking and begin doing.
Don't be distracted by criticism. Remember — the only taste of success some people get is to take a bite out of you. -Zig Ziglar

46. "Success usually comes to those who are too busy to be looking for it. -Henry David Thoreau

47. "I never dreamed about success, I worked for it. -Estee Lauder

48. "Success seems to be connected with action. Successful people keep moving. They make mistakes but they don't quit. -Conrad Hilton

49. "There are no secrets to success. It is the result of preparation, hard work, and learning from failure. -Colin Powell

50. "The real test is not whether you avoid this failure, because you won't. It's whether you let it harden or shame you into inaction, or whether you learn from it; whether you choose to persevere. -Barack Obama

51. "The only limit to our realization of tomorrow will be our doubts of today. -Franklin D. Roosevelt

52. "It is better to fail in originality than to succeed in imitation. -Herman Melville

53. "Successful people do what unsuccessful people are not willing to do. Don't wish it were easier; wish you were better. -Jim Rohn

54. "The road to success and the road to failure are almost exactly the same. -Colin R. Davis

55. "I failed my way to success. -Thomas Edison

56. "If you set your goals ridiculously high and it's a failure, you will fail above everyone else's success.
If you really look closely, most overnight successes took a long time. -Steve Jobs

58. "A successful man is one who can lay a firm foundation with the bricks others have thrown at him. -David Brinkley

59. "Things work out best for those who make the best of how things work out. -John Wooden

60. "Try not to become a man of success. Rather become a man of value. -Albert Einstein

61. "Don't be afraid to give up the good to go for the great. -John D. Rockefeller

62. "Always bear in mind that your own resolution to success is more important than any other one thing. -Abraham Lincoln

63. "Success is walking from failure to failure with no loss of enthusiasm. -Winston Churchill

64. "You know you are on the road to success if you would do your job and not be paid for it.
If you want to achieve excellence, you can get there today. As of this second, quit doing less-than-excellent work. -Thomas J. Watson

66. "If you genuinely want something, don't wait for it — teach yourself to be impatient. -Gurbaksh Chahal

67. "The only place where success comes before work is in the dictionary. -Vidal Sassoon

68. "If you are not willing to risk the usual, you will have to settle for the ordinary. -Jim Rohn

69. "Before anything else, preparation is the key to success.
You miss 100% of the shots you don't take. -Wayne Gretzky
Whether you think you can or you think you can't, you're right. -Henry Ford
I have learned over the years that when one's mind is made up, this diminishes fear. -Rosa Parks
I alone cannot change the world, but I can cast a stone across the water to create many ripples. -Mother Teresa
Nothing is impossible, the word itself says, ‘I'm possible!' -Audrey Hepburn
The question isn't who is going to let me; it's who is going to stop me. -Ayn Rand
The only person you are destined to become is the person you decide to be. -Ralph Waldo Emerson
71. "Believe you can and you're halfway there. -Theodore Roosevelt

72. "The only person you are destined to become is the person you decide to be. -Ralph Waldo Emerson

73. "I've learned that people will forget what you said, people will forget what you did, but people will never forget how you made them feel. -Maya Angelou

74. "The question isn't who is going to let me; it's who is going to stop me.
Winning isn't everything, but wanting to win is. -Vince Lombardi

76. "Whether you think you can or you think you can't, you're right. -Henry Ford

77. "You miss 100% of the shots you don't take. -Wayne Gretzky

78. "I alone cannot change the world, but I can cast a stone across the water to create many ripples. -Mother Teresa

79. "You become what you believe. -Oprah Winfrey

80. "The most difficult thing is the decision to act, the rest is merely tenacity. -Amelia Earhart

81. "How wonderful it is that nobody need wait a single moment before starting to improve the world. -Anne Frank

82. "An unexamined life is not worth living. -Socrates

83. "Everything you've ever wanted is on the other side of fear.
Dream big and dare to fail. -Norman Vaughan
No matter what the situation, you can find some humor in order to laugh a little!
85. "You may be disappointed if you fail, but you are doomed if you don't try. -Beverly Sills

86. "Life is 10% what happens to me and 90% of how I react to it. -Charles Swindoll

87. "Nothing is impossible, the word itself says, ‘I'm possible!' -Audrey Hepburn

88. "It does not matter how slowly you go as long as you do not stop. -Confucius

89. "When everything seems to be going against you, remember that the airplane takes off against the wind, not with it. -Henry Ford

90. "Too many of us are not living our dreams because we are living our fears. -Les Brown

91. "I have learned over the years that when one's mind is made up, this diminishes fear.
I didn't fail the test. I just found 100 ways to do it wrong. -Benjamin Franklin

93. "If you're offered a seat on a rocket ship, don't ask what seat! Just get on. -Sheryl Sandberg

94. "I attribute my success to this: I never gave or took any excuse. -Florence Nightingale

95. "I would rather die of passion than of boredom. -Vincent van Gogh

96. "If you look at what you have in life, you'll always have more. If you look at what you don't have in life, you'll never have enough. -Oprah Winfrey

97. "Dreaming, after all, is a form of planning. -Gloria Steinem

98. "Whatever the mind of man can conceive and believe, it can achieve. -Napoleon Hill

99. "First, have a definite, clear practical ideal; a goal, an objective. Second, have the necessary means to achieve your ends; wisdom, money, materials, and methods. Third, adjust all your means to that end. -Aristotle

100. "Twenty years from now you will be more disappointed by the things that you didn't do than by the ones you did do.
A man either lives life as it happens to him, meets it head-on and licks it, or he turns his back on it and starts to wither away.
Logic is the beginning of wisdom, not the end. Mr. Spock
You may find that having is not so pleasing a thing as wanting. This is not logical, but it is often true.
Live now; make now always the most precious time. Now will never come again.
Computers make excellent and efficient servants, but I have no wish to serve under them.
Sometimes a feeling, a gut feeling is all we humans have to go on.
With the first link, the chain is forged. The first speech censored, the first thought forbidden, the first freedom denied, chains us all irrevocably.

The prejudices people feel about each other disappear when they get to know each other.
If we're going to be damned, let's be damned for what we really are.
A library serves no purpose unless someone is using it.
When dreams become more important than reality, you give everything; you even forget how to live your life.
Insufficient facts always invite danger.
Perhaps man wasn't meant for paradise. Maybe he was meant to claw, to scratch all the way.
Madness has no purpose. Or reason. But it may have a goal.
Insults are effective only where emotion is present.
They used to say that if Man was meant to fly, he'd have wings. But he did fly. He discovered he had to!
Humans do have an amazing capacity for believing what they choose -- and excluding that which is painful.
When a child is taught, if its mind develops properly, it exceeds the sum of what it was taught, and thinks independently.
Leave bigotry in your behind; there's no room for it in this world.
Genius doesn't work on an assembly line basis. You can't simply say, 'Today I will be brilliant.
In critical moments, men sometimes see exactly what they wish to see.
Compassion: that's the one thing no machine ever had. Maybe it's the one thing that keeps men ahead of them.
Change is the essential process of all existence.
The intellect is not all, but its cultivation must come first. Or the individual makes errors and wastes time in unprofitable pursuits.
Without followers, evil cannot spread.
Our species can only survive if we have obstacles to overcome. Without them to strengthen us, we will weaken and die.
One man cannot summon the future. But one man can change the present!
A lie is a very poor way to say hello. - Edith Keeler
To all mankind -- may we never find space so vast, planets so cold, heart and mind so empty that we cannot fill them with love and warmth.
Human beings do not survive on bread alone, for what indeed is a man without freedom?
We prefer to help ourselves. We make mistakes, but we're human and maybe that's the word that best explains us.
It's time you learned that freedom is never a gift. It has to be earned.
To be human is to be complex. You can't avoid a little ugliness -- from within -- and from without.

40. "Improve a mechanical device and you may double productivity. But improve man, you gain a thousandfold." Khan Noonian Singh, "Space Seed"

41. "It's hard to believe that something which is neither seen nor felt can do so much harm." "That's true. But an idea can't be seen or felt." Vanna/Kirk, "The Cloud Minders"

42. "You know the greatest danger facing us is ourselves, and irrational fear of the unknown. There is no such thing as the unknown. Only things temporarily hidden, temporarily not understood." James T. Kirk, "The Corbomite Maneuver"

43. "Your will to survive, your love of life, your passion to know ... Everything that is truest and best in all species of beings has been revealed to you. Those are the qualities that make a civilization worthy to survive." Lai the Vian, "The Empath"

44. "A species that enslaves other beings is hardly superior -- mentally or otherwise." James T. Kirk, "The Gamesters of Triskelion"

45. "When the personality of a human is involved, exact predictions are hazardous." Dr. McCoy, "The Lights of Zetar"

46. "Instruments register only through things they're designed to register. Space still contains infinite unknowns." Mr. Spock, "The Naked Time"

47. "Look at these three words written larger than all the rest, and with special pride never written before or since -- tall words, proudly saying "We the people" ... these words and the words that follow ... must apply to everyone or they mean nothing." James T. Kirk, "The Omega Glory"

48. "Without freedom of choice there is no creativity." James T. Kirk, "The Return of the Archons"

49. "I object to intellect without discipline; I object to power without constructive purpose." Mr. Spock, "The Squire of Gothos"

50. "Now, I don't pretend to tell you how to find happiness and love, when every day is a struggle to survive. But I do insist that you do survive, because the days and the years ahead are worth living for!
Failure isn’t fatal, but failure to change might be.” —John Wooden
“Many of life’s failures are people who did not realize how close they were to success when they gave up.” —Thomas Edison
“A person who never made a mistake never tried anything new.” —Albert Einstein
“Success consists of going from failure to failure without loss of enthusiasm.” —Winston Churchill
“A person who doubts himself is like a man who would enlist in the ranks of his enemies and bear arms against himself. He makes his failure certain by himself being the first person to be convinced of it.” —Alexandre Dumas
“Every adversity, every failure, every heartache carries with it the seed of an equal or greater benefit.” —Napoleon Hill
“You build on failure. You use it as a steppingstone. Close the door on the past. You don’t try to forget the mistakes, but you don’t dwell on it. You don’t let it have any of your energy, or any of your time, or any of your space.” —Johnny Cash
“It’s not how far you fall, but how high you bounce that counts.” —Zig Ziglar
“Everything you want is on the other side of fear.” —Jack Canfield
“Success is most often achieved by those who don’t know that failure is inevitable.” —Coco Chanel
“Only those who dare to fail greatly can ever achieve greatly.” —Robert F. Kennedy
“The phoenix must burn to emerge.” —Janet Fitch
“If you’re not prepared to be wrong, you’ll never come up with anything original.” —Ken Robinson
“An inventor fails 999 times, and if he succeeds once, he’s in. He treats his failures simply as practice shots.” —Charles F. Kettering
“Our greatest glory is, not in never falling, but in rising every time we fall.” —Oliver Goldsmith
“Failure after long perseverance is much grander than never to have a striving good enough to be called a failure.” —George Eliot
“A man may fall many times, but he won’t be a failure until he says that someone pushed him.” —Elmer G. Letterman
“You’ll always miss 100 percent of the shots you don’t take.” —Wayne Gretzky
“A man must be big enough to admit his mistakes, smart enough to profit from them, and strong enough to correct them.” —John C. Maxwell
“There are no failures–just experiences and your reactions to them.” —Tom Krause
“A life spent making mistakes is not only more honorable but more useful than a life spent in doing nothing.” —George Bernard Shaw
“When you take risks, you learn that there will be times when you succeed, and there will be times when you fail, and both are equally important.” —Ellen DeGeneres
“It’s failure that gives you the proper perspective on success.” —Ellen DeGeneres
“There is no failure except in no longer trying.” —Chris Bradford
“I have not failed. I’ve just found 10,000 ways that won’t work.” —Thomas Edison
“It’s fine to celebrate success but it is more important to heed the lessons of failure.” —Bill Gates
“Do not be embarrassed by your failures, learn from them and start again.” —Richard Branson
“Success is not final, failure is not fatal: It is the courage to continue that counts.” —Winston Churchill
“There is only one thing that makes a dream impossible to achieve: the fear of failure.” —Paulo Coelho
“The biggest risk is not taking any risk. In a world that changing really quickly, the only strategy that is guaranteed to fail is not taking risks.” —Mark Zuckerberg
“No human ever became interesting by not failing. The more you fail and recover and improve, the better you are as a person. Ever meet someone who’s always had everything work out for them with zero struggle? They usually have the depth of a puddle. Or they don’t exist.” —Chris Hardwick
“The greatest mistake you can make in life is to be continually fearing you will make one.” —Elbert Hubbard
“If you always do what you’ve always done, you’ll always get what you always got.” —James P. Lewis
“Pain is temporary. Quitting lasts forever.” —Lance Armstrong
“Success is stumbling from failure to failure with no loss of enthusiasm.” —Winston Churchill
“I’d rather be partly great than entirely useless.” —Neal Shusterman
“We are all failures–at least the best of us are.” —M. Barrie
“The only real mistake is the one from which we learn nothing.” —Henry Ford
“I think you have to try and fail, because failure gets you closer to what you’re good at.” —Louis C.K.
“I thank God for my failures. Maybe not at the time, but after some reflection. I never feel like a failure just because something I tried has failed.” —Dolly Parton
“Remembering that I’ll be dead soon is the most important tool I’ve ever encountered to help me make the big choices in life. Because almost everything–all external expectations, all pride, all fear of embarrassment or failure–these things just fall away in the face of death, leaving only what is truly important.” —Steve Jobs
“Part of being a man is learning to take responsibility for your successes and for your failures. You can’t go blaming others or being jealous. Seeing somebody else’s success as your failure is a cancerous way to live.” —Kevin Bacon
“I can accept failure, everyone fails at something. But I can’t accept not trying.” —Michael Jordan
“Giving up is the only sure way to fail.” —Gena Showalter
“If you don’t try at anything, you can’t fail…it takes backbone to lead the life you want” —Richard Yates
“Failure should be our teacher, not our undertaker. Failure is delay, not defeat. It is a temporary detour, not a dead-end. Failure is something we can avoid only by saying nothing, doing nothing, and being nothing.” —Denis Waitley
“Failures are finger posts on the road to achievement.” —S. Lewis
“Winners are not afraid of losing. But losers are. Failure is part of the process of success. People who avoid failure also avoid success.” —Robert T. Kiyosaki
“Failure is so important. We speak about success all the time. It is the ability to resist failure or use failure that often leads to greater success. I’ve met people who don’t want to try for fear of failing.” —K. Rowling
“A man of genius makes no mistakes. His errors are volitional and are the portals of discovery.” —James Joyce
“Failure is unimportant. It takes courage to make a fool of yourself.” —Charlie Chaplin
“Please know that I am aware of the hazards. I want to do it because I want to do it. Women must try to do things as men have tried. When they fail, their failure must be a challenge to others.” —Amelia Earhart
“We need to accept that we won’t always make the right decisions, that we’ll screw up royally sometimes–understanding that failure is not the opposite of success, it’s part of success.” —Arianna Huffington
“The only real failure in life is not to be true to the best one knows.” —Frederic William Farrar
“You have to be able to accept failure to get better.” —LeBron James
“I don’t want the fear of failure to stop me from doing what I really care about.” —Emma Watson
“Do not fear mistakes. You will know failure. Continue to reach out.” —Benjamin Franklin
“When I was young, I observed that nine out of 10 things I did were failures. So I did 10 times more work.” —George Bernard Shaw
“Failure is simply the opportunity to begin again, this time more intelligently.” —Henry Ford
“With a hint of good judgment, to fear nothing, not failure or suffering or even death, indicates that you value life the most. You live to the extreme; you push limits; you spend your time building legacies. Those do not die.” —Criss Jami
“My great concern is not whether you have failed, but whether you are content with your failure.” —Abraham Lincoln
“Success is not built on success. It’s built on failure. It’s built on frustration. Sometimes its built on catastrophe.” —Sumner Redstone
Failure happens all the time. It happens every day in practice. What makes you better is how you react to it.” —Mia Hamm
“When we give ourselves permission to fail, we, at the same time, give ourselves permission to excel.” —Eloise Ristad
“What is the point of being alive if you don’t at least try to do something remarkable?” –John Green

The purpose of our lives is to be happy.
Everywhere you go, take a smile with you.
Smile more. Smiling can make you and others happy.
Learn to smile in every situation. See it as an opportunity to prove your strength and ability.";

	$quotes = explode( "\n", $quotes );

	return wptexturize( $quotes[ mt_rand( 0, count( $quotes ) - 1 ) ] );
}

function it_gets_better() {
	$chosen = it_gets_better_get_quotes();
	$lang   = '';
	if ( 'en_' !== substr( get_user_locale(), 0, 3 ) ) {
		$lang = ' lang="en"';
	}

	printf(
		'<p id="quotes"><span class="screen-reader-text">%s </span><span dir="ltr"%s>%s</span></p>',
		__( 'Quotes to Inspire:' ),
		$lang,
		$chosen
	);
}

add_action( 'admin_notices', 'it_gets_better' );

function quotes_css() {
	echo "
	<style type='text/css'>
	#quotes {
		float: right;
		padding: 5px 10px;
		margin: 0;
		font-size: 12px;
		line-height: 1.6666;
	}
	.rtl #quotes {
		float: left;
	}
	.block-editor-page #quotes {
		display: none;
	}
	@media screen and (max-width: 782px) {
		#quotes,
		.rtl #quotes {
			float: none;
			padding-left: 0;
			padding-right: 0;
		}
	}
	</style>
	";
}

add_action( 'admin_head', 'quotes_css' );

/* Stop Adding Functions Below this Line */

?>
