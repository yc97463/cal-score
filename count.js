var score = [], rate = [], semesterScore, response;
function form() {
    var form_i;
    for(form_i=0;form_i<4;form_i++){
        document.getElementById('form').innerHTML += `<input id="score`+form_i+`" value="`+form_i+`"><input id="rate`+form_i+`"><hr>`;
    }
}
function countScore() {
    score = [], rate = [], semesterScore = 0;
    for(form_i=0;form_i<4;form_i++){
        score.push(Number(document.getElementById('score'+form_i).value));
        rate.push(Number(document.getElementById('rate'+form_i).value/100));
        semesterScore += (score[form_i]*rate[form_i]);
    }
    document.getElementById('result').innerHTML = `您目前學期成績為 `+semesterScore+` 分`;
    //var response 算出總評（是否要補考、補修）
    if(!score[2]){
        if(semesterScore<59.5){
            // 不及格
            document.getElementById('result').innerHTML += `不及格，`;
            score[2] = Number((40-semesterScore)/rate[2]);
            if(score[2]>100){
                //無法補考
                document.getElementById('result').innerHTML += `且無法補考`;
            }else{
                document.getElementById('result').innerHTML += `但三段考 `+ score[2] +` 分就可以補考`;
                //可補考
            }
        }else{
            document.getElementById('result').innerHTML += `，恭喜過關`;
            //恭喜過關
        }
    }else{
        if(semesterScore<59.5){
            // 不及格
            document.getElementById('result').innerHTML += `不及格，`;
            if(semesterScore<39.5){
                //無法補考
                document.getElementById('result').innerHTML += `且直接進重修班`;
            }else{
                document.getElementById('result').innerHTML += `但可以補考`;
                //可補考
            }
        }else{
            document.getElementById('result').innerHTML += `，恭喜過關`;
            //恭喜過關
        }
    }
    document.getElementById('result').innerHTML += `。`;
}

function countScore_draft() {
    if(!examLast){
        var examLast = 0;
        // var examLast 後面跳出迴圈
    }
    //var response 算出總評（是否要補考、補修）
    var semesterScore = examFirst*rateFirst+examSecond*rateSecond+examLast*rateLast+usualScore*usualRate;
    if(semesterScore<59.5){
        // 不及格
        if(semesterScore<39.5){
            //無法補考
        }else{
            //可補考
            //補考要考幾分才會過
        }
    }else{
        //恭喜過關
    }
    var response;
    document.getElementById('result').innerHTML=response;
}
console.log('online');
