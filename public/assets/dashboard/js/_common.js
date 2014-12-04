function ShowModal(_url,_divId){
    $ ('#'+_divId).removeData ('modal');
    $ ('#'+_divId).modal ({remote : _url});
}