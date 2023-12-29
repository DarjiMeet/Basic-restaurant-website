$('.button').html(" <input class='submit' type='submit' name='submit' value='Confirm Your Order' >")

var price = [220,200,200,210,200,230,300,290,290,300,280,280,250,270,30,50,70,90,90,100,320,350,360,380,400,190,170,190,190,180,250,250,280,280,280,100,100,100,80,80,330,330,230,260]

var a=0
       
// for(var i=0;i<$('.select').length;i++){
//             if(document.querySelectorAll('.width')[i].checked){
//              a= a + price[i]
//             }
//         }
        
// console.log(a)

$('.button').hide()


$('.Done').on('click',function(){
    for(var i=0;i<$('.select').length;i++){
        if(document.querySelectorAll('.width')[i].checked){
         a= a + price[i]
         document.querySelectorAll('.select')[i].classList.add('bg');
        }
    }
    ('#Values').attr('value',' &#x20B9;'+a)
    document.getElementById('SetValue').innerText='Price='+a
    $('.button').show()
    $('.Done').hide()
    $('.width').hide()
    $('.note').hide()
    
})



// undefined
// for(i=0;i<$('.pri').length;i++){a.push(document.querySelectorAll('.pri')[i].innerText)}



// document.querySelector(".button").style.display="block"
// $('br').before('<span>&#x20B9;300</span>')

// $('.button').on('click',function(){
//     var len=document.querySelectorAll('.width').length
//    const arr=new Array()
//     for(var i=0;i<len;i++){
//         if(document.querySelectorAll('.width')[i].checked){
//             arr.push(document.querySelectorAll('.width')[i].parentElement.innerText)
//         }
//     }
//     console.log(arr)
    


//     $('.press').html("Place Your Order") 
// })
$('.toogle').hide()
$('svg').on('click',function(){
    $('.toogle').toggle()
})

$("input").on("mouseover",function(){
        this.style.cursor="pointer"
       
    })
$(".select").on("mouseover",function(){
        this.style.cursor="pointer"
        this.style.border='2px solid brown'
    })
$(".select").on("mouseout",function(){
    this.style.border='none'
    })


// document.querySelector(".press").addEventListener("click",function(){
//     this.classList.add("btpress")
//     setTimeout(() => {
//         this.classList.remove("btpress")
//     },100);
    
// })

