@extends('layout.mainlayout')
@section('content')
    <body class="antialiased high-school">
    @include('Header.header')
    @include('Banner.banner')
    <div class="high-school-img"></div>
    <div class="high-school-block">
        <div class="circle"></div>
        <p class="high-school-text">
            {{ __('Vidusskolas laikā lielākā daļa sāk domāt par savu nākotni un kādu karjeras ceļu tie vēlēsies iet. Dažādu iemeslu dēļ nomainīju skolu, ko es uzskatu par vienu no saviem labākajiem lēmumiem, jo pārejot uz Ziemeļvalstu ģimnāziju mans draugu loks stipri palielinājās.') }}
            <br/> <br/>
            {{ __('Vecajā skolā es jutos, ka mana attīstīšanās ir apstājusies un manu klases biedru intereses drastiski atšķīrās no manām. Nomainot skolu es iepazinu cilvēkus, kas domāja man līdzīgi un man atkal uzradās vēlme attīstīties, šeit es jau sapratu, ka gribu kļūt par programmētāju. Man klasē bija draugi, kas jau bija saskārušies ar programmēšanu, tāpēc man bija no kā mācīties. Man tik ļoti tas ieinteresēja, ka 10.klasē kā savu zinātniski pētnieciskā darba virzienu izvēlējos informātiku. Mana ZPD tēma bija dažādu operētājsistēmu drošības salīdzināšana, kura ietvaros centos uzlauzt tādas sistēmas kā Linux, Windows un MacOs, kas arī izdevās.') }}
            <br/> <br/>
            {{ __('Tā kā es jau izdomāju, ka gribu būt programmētājs sāku vairāk mācīties fiziku, matemātiku, angļu valodu un informātiku, jo uzskatīju, ka tieši šie priekšmeti man palīdzēs iestāties universitātē, kur varēšu turpināt apgūt datoriku.') }}</p>
    </div>
    </body>
@endsection
<b></b>
