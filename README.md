## PornFlip
Login, search and scrap movie information as well as download links, From PornFlip.com website


# Installation
```
composer require Psoan/PornFlip
```

## Basic usage : You should login first, To create an account go to [PornFlip](https://www.pornflip.com/account/join)
```php
require_once 'vendor/autoload.php
$username = 'AccountUsername';
$password = 'AccountPassword';
$cookiefile = 'firstaccountcookie.txt'; //You can use it as a multi-account
$pornflip = new PornFlip($username, $password, $cookiefile);
print_r($pornflip->login());
```
### return
```php
Array
(
    [status] => ok
    [redirect] => /
)
```
## Search videos on the website
```php
print_r($pornflip->seacrh('Stepmom', 2));
```
### return
```php
Array
(
    [count] => 22
    [0] => Array
        (
            [title] => Assparade Lil D Fucks Stepmoms Phat Ass Narcos Bald Pussy
            [url] => https://www.pornflip.com/U6rmmh1S4ir/assparade-lil-d-fucks-stepmoms-phat-ass-narcos-bald-pussy
            [img] => https://cdn-img1.pornflip.com/thumbs/253/2536110/743_m.jpg
            [duration] => 24:47
            [autor] => sonataluchiyyy
            [time-addition] => Sep 11
            [rating] => 50%
        )

    [1] => Array
        (
            [title] => Tabooheat Cory Chase Fun And Games With Stepmom Rivr Fuck Hard
            [url] => https://www.pornflip.com/PJo9LeqGV2V/tabooheat-cory-chase-fun-and-games-with-stepmom-rivr-fuck-hard
            [img] => https://cdn-img1.pornflip.com/thumbs/253/2536082/513_m.jpg
            [duration] => 50:59
            [autor] => sonataluchiyyy
            [time-addition] => Sep 11
            [rating] => 86%
        )

    [2] => Array
        (
            [title] => Big Booty Chick Playing Her Pussy
            [url] => https://www.pornflip.com/v/6TbjMgs9eqX
            [img] => https://cdn-img1.pornflip.com/thumbs/190/1902559/308_m.jpg
            [hd] => HD
            [duration] => 10:17
            [autor] => cam4free1
            [time-addition] => Jul 13, 2019
        )

    [3] => Array
        (
            [title] => Japanese Stepmom Needs Her Pussy Filled
            [url] => https://www.pornflip.com/39ueekhQCeA/japanese-stepmom-needs-her-pussy-filled
            [img] => https://cdn-img1.pornflip.com/thumbs/253/2530226/683_m.jpg
            [hd] => HD
            [duration] => 22:47
            [autor] => wellingtonbeef
            [time-addition] => Sep 6
            [rating] => 100%
        )

    [4] => Array
        (
            [title] => Stepmom Your Tits Are So Big
            [url] => https://www.pornflip.com/q3y-ZCf8DKe/stepmom-your-tits-are-so-big
            [img] => https://cdn-img1.pornflip.com/thumbs/253/2530223/1118_m.jpg
            [hd] => HD
            [duration] => 22:21
            [autor] => wellingtonbeef
            [time-addition] => Sep 6
            [rating] => 67%
        )

    [5] => Array
        (
            [title] => Czech Stepmom Florane Russell Spanks Blonde Teen Jenny Wild
            [url] => https://www.pornflip.com/ca1463d8doy/sv/czech-stepmom-florane-russell-spanks-blonde-teen-jenny-wild
            [img] => https://cdn-img1.pornflip.com/vid/6/751856_m.jpg
            [hd] => HD
            [duration] => 06:58
            [autor] => SEXYhub.com
            [time-addition] => Sep 2
            [rating] => 83%
        )

    [6] => Array
        (
            [title] => Japanese Stepmoms Are So Lonely
            [url] => https://www.pornflip.com/i3zl80THE65/japanese-stepmoms-are-so-lonely
            [img] => https://cdn-img1.pornflip.com/thumbs/252/2526479/638_m.jpg
            [hd] => HD
            [duration] => 21:12
            [autor] => wellingtonbeef
            [time-addition] => Sep 1
            [rating] => 50%
        )

    [7] => Array
        (
            [title] => Stepmom Your Tits Are Too Big
            [url] => https://www.pornflip.com/f6eEcAPNrhM/stepmom-your-tits-are-too-big
            [img] => https://cdn-img1.pornflip.com/thumbs/252/2526481/693_m.jpg
            [hd] => HD
            [duration] => 23:04
            [autor] => wellingtonbeef
            [time-addition] => Sep 1
        )

    [8] => Array
        (
            [title] => Brazzers - Kianna Dior In Bake Sale Bang
            [url] => https://www.pornflip.com/tJKyhQ4_iCf/sv/brazzers-kianna-dior-in-bake-sale-bang
            [img] => https://cdn-img1.pornflip.com/vid/2/750352_m.jpg?7557157
            [hd] => HD
            [duration] => 07:58
            [autor] => Brazzers
            [time-addition] => Aug 20
            [rating] => 100%
        )

    [9] => Array
        (
            [title] => Familysinners Lexi Luna Frat Bro Schooled By Stepmom Deaumax
            [url] => https://www.pornflip.com/8d2zr0dEVVL/familysinners-lexi-luna-frat-bro-schooled-by-stepmom-deaumax
            [img] => https://cdn-img1.pornflip.com/thumbs/251/2511993/838_m.jpg
            [duration] => 27:50
            [autor] => Morines
            [time-addition] => Aug 19
            [rating] => 81%
        )

    [10] => Array
        (
            [title] => Brazzers - Evelin Stone And Diamond Jackson In Undercover Step-Mother
            [url] => https://www.pornflip.com/UuP6PZ5tck3/sv/brazzers-evelin-stone-and-diamond-jackson-in-undercover-step-mother
            [img] => https://cdn-img1.pornflip.com/vid/0/749090_m.jpg
            [hd] => HD
            [duration] => 07:58
            [autor] => Brazzers
            [time-addition] => Aug 9
            [rating] => 86%
        )

    [11] => Array
        (
            [title] => Annabellerogers Already On To The Next Brandi Love Stepmom
            [url] => https://www.pornflip.com/PCoPQ5ASksP/annabellerogers-already-on-to-the-next-brandi-love-stepmom
            [img] => https://cdn-img1.pornflip.com/thumbs/249/2493562/898_m.jpg
            [duration] => 29:50
            [autor] => asdfgh456
            [time-addition] => Aug 4
            [rating] => 50%
        )

    [12] => Array
        (
            [title] => Mylifeinmiami Little Slut And Horny Stepmom Ryoko Murakami Uncensored
            [url] => https://www.pornflip.com/mfO8LeCSkP7/mylifeinmiami-little-slut-and-horny-stepmom-ryoko-murakami-uncensored
            [img] => https://cdn-img1.pornflip.com/thumbs/249/2493399/943_m.jpg
            [duration] => 46:59
            [autor] => asdfgh456
            [time-addition] => Aug 4
            [rating] => 100%
        )

    [13] => Array
        (
            [title] => Japanese Stepmom And Son Fuck After Dinner
            [url] => https://www.pornflip.com/2tBkHCUP3Uf/japanese-stepmom-and-son-fuck-after-dinner
            [img] => https://cdn-img1.pornflip.com/thumbs/248/2489299/598_m.jpg
            [hd] => HD
            [duration] => 15:01
            [autor] => wellingtonbeef
            [time-addition] => Jul 31
            [rating] => 50%
        )

    [14] => Array
        (
            [title] => Hot Japanese Lesbian StepMom And Teen
            [url] => https://www.pornflip.com/zi4RFtEEett/hot-japanese-lesbian-stepmom-and-teen
            [img] => https://cdn-img1.pornflip.com/thumbs/248/2489305/293_m.jpg
            [hd] => HD
            [duration] => 14:30
            [autor] => wellingtonbeef
            [time-addition] => Jul 31
            [rating] => 100%
        )

    [15] => Array
        (
            [title] => Beautyangels Bloom Lambiephp Stepmom Porn
            [url] => https://www.pornflip.com/XVfn9ajtvlY/beautyangels-bloom-lambiephp-stepmom-porn
            [img] => https://cdn-img1.pornflip.com/thumbs/247/2472166/388_m.jpg
            [duration] => 12:52
            [autor] => yoriaaing
            [time-addition] => Jul 15
        )

    [16] => Array
        (
            [title] => Aussiefellatioqueens Arianna North Guy Try Outphp Stepmom Fuck
            [url] => https://www.pornflip.com/R1H6exQP7bE/aussiefellatioqueens-arianna-north-guy-try-outphp-stepmom-fuck
            [img] => https://cdn-img1.pornflip.com/thumbs/247/2472162/503_m.jpg
            [duration] => 16:42
            [autor] => yoriaaing
            [time-addition] => Jul 15
        )

    [17] => Array
        (
            [title] => Bellesafilms Abigail Mac Crossing A Linephp Stepmom Sex
            [url] => https://www.pornflip.com/xFhWhfW_Gi5/bellesafilms-abigail-mac-crossing-a-linephp-stepmom-sex
            [img] => https://cdn-img1.pornflip.com/thumbs/247/2472143/988_m.jpg
            [duration] => 32:52
            [autor] => dorousot
            [time-addition] => Jul 15
            [rating] => 92%
        )

    [18] => Array
        (
            [title] => Houseofyre Wrestle Fucking Stepmomphp Filled Cunt
            [url] => https://www.pornflip.com/tv1sgTZT_79/houseofyre-wrestle-fucking-stepmomphp-filled-cunt
            [img] => https://cdn-img1.pornflip.com/thumbs/247/2472137/673_m.jpg
            [duration] => 16:53
            [autor] => nonengor
            [time-addition] => Jul 15
        )

    [19] => Array
        (
            [title] => RealityKings - Episode 6: The Scene With  Julianna Vega And Nia Nacci
            [url] => https://www.pornflip.com/qtwHqptJCo0/sv/realitykings-episode-the-scene-with-julianna-vega-and-nia-nacci
            [img] => https://cdn-img1.pornflip.com/vid/8/745068_m.jpg
            [hd] => HD
            [duration] => 07:59
            [autor] => realitykings
            [time-addition] => Jul 14
            [rating] => 60%
        )

    [20] => Array
        (
            [title] => Cory Chase And Haley Reed Staying Home
            [url] => https://www.pornflip.com/QisvYJMhHbi/sv/cory-chase-and-haley-reed-staying-home
            [img] => https://cdn-img1.pornflip.com/vid/8/743658_m.jpg
            [hd] => HD
            [duration] => 07:58
            [autor] => RealityKings
            [time-addition] => Jul 9
            [rating] => 88%
        )

    [21] => Array
        (
            [title] => Houseofyre Brooklyn Chase Desperate Stepmom Ujizz
            [url] => https://www.pornflip.com/8lo-NIRSq3I/houseofyre-brooklyn-chase-desperate-stepmom-ujizz
            [img] => https://cdn-img1.pornflip.com/thumbs/246/2460819/408_m.jpg
            [duration] => 20:23
            [autor] => risearise
            [time-addition] => Jul 7
            [rating] => 100%
        )

)
```
## Get download urls for a video
```php
print_r($pornflip->getDownloadURLs('https://www.pornflip.com/U6rmmh1S4ir/assparade-lil-d-fucks-stepmoms-phat-ass-narcos-bald-pussy'));
```
### return 
```php
Array
(
    [status] => ok
    [list] => Array
        (
            [360p] => https://www.pornflip.com/away/download?to=uQh8mEieSUjzOt385Gd83z11zz2VGHDsIUAE8E4F3%2FlzPFLbtmsmQPR0%2BCh0cM5JPeUe%2BXkMF%2F7G5SNmF4%2FfaTqpKAWrwUPor9qWqfi%2FTIx%2BdainvmRqkONdvEqDxQsX8GIRPJkuoDKI3y8olGAyDuYCo4g1g93NXDI5Gpg26C5jGVH%2Bwq2LJfo8xspunCQHElDxkrveS5r1fmcrKYiImqBmMiH9SMYfsHxZ7Sk%2FZc3JLmwOg1E2pUxSCJglIPD4
            [480p] => https://www.pornflip.com/away/download?to=BNuyqWSqnHedy%2BuQGyr5CNsdNtf44uq4Q0sD2w%2Bcy3%2BHqSJ0yIyQ0seoV4nBldlxDTIb2IFRhcPwdGCxVeB0H4krviFJCENu9LUi7f2%2BSpauBglNz%2B3VhdGrbgO6tie3%2FGjnA32gITChclsDuEM6%2BMhpgIluKelNhYuLrkzZPm5CxBqGlZ2lBF6PcYuITlKSWy09vzBp68i12JkW7Ku%2BzxUlz8b11qWjNtLbavZzYOANP%2BULXFtrED2WP78tt4VA
        )

)
```

### Good luck :D
