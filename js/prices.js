var getArrayPrices = function (){
    var pricesArray = [];
    var Film = [];
    var RowFilm = [];

    RowFilm ['from_the_first_to_the_fifth'] = 70.0;
    RowFilm ['from_sixth_to_ninth'] = 60.0;
    RowFilm ['from_the_fifth_to_the_fifteenth'] = 50.0;
    Film ['small_hall'] = RowFilm;

    RowFilm = [];
    RowFilm ['from_the_first_to_the_fifth'] = 75.0;
    RowFilm ['from_sixth_to_ninth'] = 65.0;
    RowFilm ['from_the_fifth_to_the_fifteenth'] = 55.0;
    Film ['Big_hall'] = RowFilm;

    RowFilm = [];
    RowFilm ['from_the_first_to_the_fifth'] = 90.0;
    RowFilm ['from_sixth_to_ninth'] = 75.0;
    RowFilm ['from_the_fifth_to_the_fifteenth'] = 70.0;
    Film ['3D'] = RowFilm;

    pricesArray ['time'] = Film;

    var Film1 = [];
    RowFilm = [];
    RowFilm ['from_the_first_to_the_fifth'] = 65.0;
    RowFilm ['from_sixth_to_ninth'] = 55.0;
    RowFilm ['from_the_fifth_to_the_fifteenth'] = 50.0;
    Film1 ['small_hall'] = RowFilm;

    RowFilm = [];
    RowFilm ['from_the_first_to_the_fifth'] = 75.0;
    RowFilm ['from_sixth_to_ninth'] = 65.0;
    RowFilm ['from_the_fifth_to_the_fifteenth'] = 55.0;
    Film1 ['Big_hall'] = RowFilm;

    RowFilm = [];
    RowFilm ['from_the_first_to_the_fifth'] = 70.0;
    RowFilm ['from_sixth_to_ninth'] = 65.0;
    RowFilm ['from_the_fifth_to_the_fifteenth'] = 60.0;
    Film1 ['3D'] = RowFilm;

    pricesArray ['bigHero'] = Film1;

    var Film2 = [];
    RowFilm = [];
    RowFilm ['from_the_first_to_the_fifth'] = 70.0;
    RowFilm ['from_sixth_to_ninth'] = 75.0;
    RowFilm ['from_the_fifth_to_the_fifteenth'] = 80.0;
    Film2 ['small_hall'] = RowFilm;

    RowFilm = [];
    RowFilm ['from_the_first_to_the_fifth'] = 75.0;
    RowFilm ['from_sixth_to_ninth'] = 80.0;
    RowFilm ['from_the_fifth_to_the_fifteenth'] = 85.0;
    Film2 ['Big_hall'] = RowFilm;

    RowFilm = [];
    RowFilm ['from_the_first_to_the_fifth'] = 100.0;
    RowFilm ['from_sixth_to_ninth'] = 95.0;
    RowFilm ['from_the_fifth_to_the_fifteenth'] = 90.0;
    Film2 ['3D'] = RowFilm;

    pricesArray ['escapePlan'] = Film2;

    var Film3 = [];
    RowFilm = [];
    RowFilm ['from_the_first_to_the_fifth'] = 60.0;
    RowFilm ['from_sixth_to_ninth'] = 55.0;
    RowFilm ['from_the_fifth_to_the_fifteenth'] = 50.0;
    Film3 ['small_hall'] = RowFilm;

    RowFilm = [];
    RowFilm ['from_the_first_to_the_fifth'] = 65.0;
    RowFilm ['from_sixth_to_ninth'] = 55.0;
    RowFilm ['from_the_fifth_to_the_fifteenth'] = 50.0;
    Film3 ['Big_hall'] = RowFilm;

    RowFilm = [];
    RowFilm ['from_the_first_to_the_fifth'] = 80.0;
    RowFilm ['from_sixth_to_ninth'] = 75.0;
    RowFilm ['from_the_fifth_to_the_fifteenth'] = 70.0;
    Film3 ['3D'] = RowFilm;

    pricesArray ['Interstellar-film'] = Film3;

    return pricesArray;

};