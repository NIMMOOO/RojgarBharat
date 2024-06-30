$.ajax({
    url: "fetch_data.php",
    type: "POST",

    success: function (dataResult) {
        var dataResult = JSON.parse(dataResult);
        console.log(dataResult)
        $.each(dataResult[0], function (i, f) {
            var tblRow = "<tr>" + "<td>" + f.Id + "</td>" +
                "<td>" + f.Name + "</td>" + "<td>" + f.Work + "</td>" + "<td>" + f.Expected_salary + "</td>" + "<td>" + f.Age + "</td>" + "</tr>"
            $(tblRow).appendTo("#data");
            var div1=document.createElement('div');
            var div2=document.createElement('div');
            var progress=document.getElementById('progress');
            div1.className="shadow w-full bg-grey-light";
            div2.className='bg-blue-500 text-xs leading-none py-1 text-center text-white';
            var progressVal=f.work_progress;
            progress.appendChild(div1);
            div1.appendChild(div2);
            div1.style="border-radius:0.5rem";
            div2.style=`width: ${progressVal}%;margin:10px 0;border-radius:0.5rem`;
            div2.innerHTML=f.Name+" "+progressVal+"%";
            
       });
        document.getElementById('emp_hired').innerHTML=dataResult[1][0].emp_hired;
        document.getElementById('Ratings').innerHTML=dataResult[1][0].Ratings;
        document.getElementById('job_posted').innerHTML=dataResult[1][0].Job_posted;
        document.getElementById('occupation').innerHTML=dataResult[1][0].occupation;

        $.each(dataResult[0], function (i, f) {
            var recommended_user=document.getElementById('recommended_user');
            var div3=document.createElement('div');
            recommended_user.appendChild(div3);
            div3.style="display:flex;flex-direction:column;align-items:center;    box-shadow: grey 3px 6px 9px;border-radius:0.5rem;padding:2rem;margin:10px";
            var Name=div3.appendChild(document.createElement('div'));
            var City=div3.appendChild(document.createElement('div'));
            var Work=div3.appendChild(document.createElement('div'));
            Name.innerHTML="Name:"+f.Name;
            City.innerHTML="City:"+f.City;
            Work.innerHTML="Work:"+f.Work;
        });

    }

});
