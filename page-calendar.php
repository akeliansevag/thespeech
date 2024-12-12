<?php get_header(); ?>
<style>
    .calendar-container {
        background-color: #111;
        padding: 20px;
        border-radius: 10px;
        text-align: center;
        position: relative;
        /* Added to help position the dropdown correctly */
    }

    .calendar-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 10px;
    }

    .arrow {
        background: none;
        color: white;
        font-size: 20px;
        border: none;
        cursor: pointer;
    }

    .month-year {
        cursor: pointer;
        color: white;
        font-size: 18px;
        font-weight: bold;
    }

    .days-header {
        display: grid;
        grid-template-columns: repeat(7, 1fr);
        color: #888;
        margin-bottom: 10px;
    }

    .calendar-body {
        display: grid;
        grid-template-columns: repeat(7, 1fr);
        gap: 5px;
    }

    .day {
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #222;
        border-radius: 5px;
        padding: 10px;
        cursor: pointer;
        color: white;
    }

    .day:hover {
        background-color: #444;
    }

    /* Highlight the current date in red */
    .current-day {
        background-color: red;
        color: white;
    }

    .select-wrapper {
        display: none;
        position: absolute;
        background-color: #222;
        border-radius: 5px;
        padding: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
        z-index: 100;
        /* Match the width of the calendar container */
    }

    select {
        background-color: #333;
        color: white;
        border: none;
        font-size: 14px;
        padding: 5px;
        border-radius: 5px;
        margin: 5px;
        width: 100%;
        /* Make the dropdowns match the container width */
    }
</style>
<section class="bg-white my-20">
    <div class="container">
        <div class="calendar-container mt-96">
            <div class="calendar-header">
                <button class="arrow" id="prev">&lt;</button>
                <span id="month-year" class="month-year"></span>
                <button class="arrow" id="next">&gt;</button>
            </div>
            <div class="days-header">
                <div>Sun</div>
                <div>Mon</div>
                <div>Tue</div>
                <div>Wed</div>
                <div>Thu</div>
                <div>Fri</div>
                <div>Sat</div>
            </div>
            <div id="calendar-body" class="calendar-body"></div>
        </div>
    </div>
</section>
<script>
    const monthNames = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
    const daysInMonth = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];

    let currentDate = new Date();
    let currentMonth = currentDate.getMonth();
    let currentYear = currentDate.getFullYear();
    let currentDay = currentDate.getDate(); // Get the current day

    function generateCalendar(month, year) {
        const firstDay = new Date(year, month, 1).getDay();
        const daysInCurrentMonth = (month === 1 && ((year % 4 === 0 && year % 100 !== 0) || (year % 400 === 0))) ? 29 : daysInMonth[month];

        const calendarBody = document.getElementById("calendar-body");
        calendarBody.innerHTML = "";

        // Fill the calendar with empty divs for the first day
        for (let i = 0; i < firstDay; i++) {
            const emptyCell = document.createElement("div");
            calendarBody.appendChild(emptyCell);
        }

        // Create the days of the month
        for (let i = 1; i <= daysInCurrentMonth; i++) {
            const dayCell = document.createElement("div");
            dayCell.classList.add("day");
            dayCell.textContent = i;

            // Highlight the current day in red
            if (i === currentDay && month === currentMonth && year === currentYear) {
                dayCell.classList.add("current-day");
            }

            calendarBody.appendChild(dayCell);
        }

        document.getElementById("month-year").textContent = `${monthNames[month]} ${year}`;
    }

    document.getElementById("prev").addEventListener("click", () => {
        currentMonth--;
        if (currentMonth < 0) {
            currentMonth = 11;
            currentYear--;
        }
        generateCalendar(currentMonth, currentYear);
    });

    document.getElementById("next").addEventListener("click", () => {
        currentMonth++;
        if (currentMonth > 11) {
            currentMonth = 0;
            currentYear++;
        }
        generateCalendar(currentMonth, currentYear);
    });

    document.getElementById("month-year").addEventListener("click", (e) => {
        const selectWrapper = document.createElement("div");
        selectWrapper.classList.add("select-wrapper");
        document.body.appendChild(selectWrapper);

        const monthSelect = document.createElement("select");
        const yearSelect = document.createElement("select");

        // Populate month dropdown
        monthNames.forEach((monthName, index) => {
            const option = document.createElement("option");
            option.value = index;
            option.textContent = monthName;
            monthSelect.appendChild(option);
        });
        monthSelect.value = currentMonth;

        // Populate year dropdown
        for (let i = currentYear - 10; i <= currentYear + 10; i++) {
            const option = document.createElement("option");
            option.value = i;
            option.textContent = i;
            yearSelect.appendChild(option);
        }
        yearSelect.value = currentYear;

        // Add dropdowns to the select wrapper
        selectWrapper.appendChild(monthSelect);
        selectWrapper.appendChild(yearSelect);

        // Calculate the position of the select box
        const monthYearElement = document.getElementById("month-year");
        const rect = monthYearElement.getBoundingClientRect();
        selectWrapper.style.top = `${rect.bottom + window.scrollY}px`;
        selectWrapper.style.left = `${rect.left + window.scrollX}px`;

        // Show the select dropdown
        selectWrapper.style.display = "block";

        // On selecting a month and year, update the calendar
        selectWrapper.addEventListener("change", () => {
            currentMonth = parseInt(monthSelect.value);
            currentYear = parseInt(yearSelect.value);
            generateCalendar(currentMonth, currentYear);

            // Hide the dropdown after selection
            selectWrapper.style.display = "none";
            selectWrapper.remove();
        });

        // Close the dropdown if clicked outside
        const closeDropdown = (event) => {
            if (!selectWrapper.contains(event.target) && event.target !== monthYearElement) {
                selectWrapper.style.display = "none";
                selectWrapper.remove();
                document.removeEventListener("click", closeDropdown); // Remove the listener after closing
            }
        };

        document.addEventListener("click", closeDropdown); // Listen for clicks outside
    });

    // Initial calendar load
    generateCalendar(currentMonth, currentYear);
</script>
<?php get_footer(); ?>