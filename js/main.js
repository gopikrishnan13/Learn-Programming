function runajax()
{
    
    var request = new XMLHttpRequest();
    request.onload = function(){
        var data = JSON.parse(this.responseText);
        document.getElementById("test").innerHTML=Object.keys(data[0]);
        //console.log(data[0].titile)
        
    };
    request.open("GET","https://my-json-server.typicode.com/typicode/demo/posts");
    request.send();
}

function jquery()
{
    $(document).ready(function(){
        $("#hide").click(function(){
            $('div').hide();
        });
    });
}

function jquery1()
{

    $(document).ready(function(){

        $("#btn").click(function(){
            $("#pt").text(function(){
                return "old text : new text";
            });
            $("#pt").css({
                "color":"red",
                "background":"blue"
            })
        });
        // alert($("#ttt").html("hello world"));
        // $("#hide").mouseenter(function(){
        //     $('button').css("color","green");
        // });
        // $('#hide').mouseleave(function(){
        //     $('button').css("color","red");
        // });
        // $('#hide').dblclick(function(){
        //     $('button').css("color","blue");
        // });
        // $('#tes').load("https://my-json-server.typicode.com/typicode/demo/posts",function(){
        //     $('#tes').css("background","yellow")
        // });
        // $('#toggle').click(function(){
        //     $("#tes").toggle(1000,function(){
        //         $("#tes").css("color","darkblue");
        //     });
        // });
        // $('#slide').mouseenter(function(){
        //     $('p').slideToggle(5000)
        //     .css("color","purple");
        // });
        // $('#stop').click(function(){
        //     $('p').stop();
        // });
    });
}
jquery1();