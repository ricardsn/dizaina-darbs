@extends('layout.mainlayout')
@section('content')
    <body class="antialiased primary-school">
    @include('Header.header')
    @include('Banner.banner')
    <div class="primary-school-img"></div>
    <div class="primary-school-block">
        <div class="circle"></div>
        <p class="primary-school-text">
            {{ __('Viens no svarīgākajiem posmiem dzīvē, manuprāt, ir izglītība un pārsvarā daudziem tieši tā sākas ar skolu. Manā gadījumā savu izglītību es uzsāku Rīgas 69. vidusskolā, kur es iepazinu daudzus cilvēkus, ieguvu daudz svarīgas un noderīgas zināšanas.') }}
            <br/> <br/>
            {{ __('Viena no svarīgākajām iemaņām ko, manuprāt, ir jāapgūst katram ir socializācija, jo, iegūstot draugus, mācīšanās process kļūst ar vien patīkamāks un vieglāks. Galvenais neaizrauties ar to un neaizmirst arī par mājasdarbu veikšanu. Skolā es biju kluss un mierīgs, man nebija problēmu ar skolotājiem kā arī viņiem nebija problēmas ar mani.') }}
            <br/> <br/>
            {{ __('Jau no pašas bērnības es sapratu, ka es negribu būt vislabākais, tāpēc arī necentos gūt augstākās atzīmes. Darīju visu pēc saviem spēkiem un mācījos to ko uzskatīju par interesantu, kaut arī man vecāki centās uzspiest gūt augstākos vērtējumus un salīdzināja tos ar maniem klasesbiedriem, bet es turpināju sekot savām domām un ticēju, ka es sasniegšu to ko es gribu, ja ieklausīšos ne tikai citu vēlmēs, bet arī savās.') }}</p>
    </div>
    </body>
@endsection
<b></b>
