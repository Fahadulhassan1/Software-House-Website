const patterns = {
    username: /^[a-z]{5,12}$/i ,
    telephone : /^[0-9]{11}$/ ,
    password: /^[a-z]{5,12}$/i ,
    email: /^([a-z0-9\.-]+)@([a-z0-9]+)\.([a-z]{2,8})(\.[a-z]{2,8})?$/ ,
    slug: /^[a-z0-9-]{8,12} $/,

}
function validate (field){
    if(patterns[field.name].test(field.value)){
        field.className = 'valid'
    }else{
        field.className = 'invalid'
    }
}