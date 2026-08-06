document.addEventListener("DOMContentLoaded", function () {

    /* ==========================================================
       Flash Sale Countdown
       HTML:
       <div class="k86-countdown-timer"
            data-end="2026-12-31T23:59:59">
       ========================================================== */

    document.querySelectorAll(".k86-countdown-timer").forEach(function(timer){

        const endTime = timer.dataset.end;

        if(!endTime){
            return;
        }

        function updateCountdown(){

            const end = new Date(endTime).getTime();
            const now = Date.now();

            let diff = Math.floor((end - now) / 1000);

            if(diff < 0){
                diff = 0;
            }

            const days = Math.floor(diff / 86400);
            diff %= 86400;

            const hours = Math.floor(diff / 3600);
            diff %= 3600;

            const minutes = Math.floor(diff / 60);
            const seconds = diff % 60;

            const values = timer.querySelectorAll(".k86-time-value");

            if(values.length >= 4){
                values[0].textContent = String(days).padStart(2,"0");
                values[1].textContent = String(hours).padStart(2,"0");
                values[2].textContent = String(minutes).padStart(2,"0");
                values[3].textContent = String(seconds).padStart(2,"0");
            }
        }

        updateCountdown();
        setInterval(updateCountdown,1000);

    });

    /* ==========================================================
       Timeline Tabs
       HTML:
       .k86-tab-btn[data-tab="day1"]
       .k86-tab-content[data-tab="day1"]
       ========================================================== */

    const buttons = document.querySelectorAll(".k86-tab-btn");

    buttons.forEach(function(button){

        button.addEventListener("click",function(){

            const target = this.dataset.tab;

            document.querySelectorAll(".k86-tab-btn").forEach(function(btn){
                btn.classList.remove("active");
            });

            document.querySelectorAll(".k86-tab-content").forEach(function(content){
                content.classList.remove("active");
            });

            this.classList.add("active");

            const activeContent = document.querySelector(
                '.k86-tab-content[data-tab="' + target + '"]'
            );

            if(activeContent){
                activeContent.classList.add("active");
            }

        });

    });

});
