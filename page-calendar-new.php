<?php get_header(); ?>
<style>
    .calendar-container {
        background-color: #111;
        padding: 20px;
        border-radius: 10px;
        text-align: center;
        position: relative;
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

    .year,
    .month {
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #222;
        color: white;
        padding: 10px;
        cursor: pointer;
    }

    .year:hover,
    .month:hover {
        background-color: #444;
    }

    /* Highlight the current day in red */
    .current-day {
        background-color: red;
        color: white;
    }

    button {
        background-color: #333;
        color: white;
        padding: 10px;
        border-radius: 5px;
        cursor: pointer;
        margin-top: 20px;
    }

    button:hover {
        background-color: #444;
    }
</style>
<section class="bg-white my-20">
    <div class="container">
        <div class="grid grid-cols-3">
            <div class="bg-red-600">fgs</div>
            <div class="col-span-2 grid grid-cols-2">
                <div class="calendar-container mt-96">
                    <div class="calendar-header">
                        <button id="prev" class="arrow">&#8249;</button>
                        <div id="month-year" class="month-year">Dec 2024</div>
                        <button id="next" class="arrow">&#8250;</button>
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
                    <button id="go-to-today">Go to Today</button>
                </div>
                <div class="bg-red-600">fgs</div>
            </div>
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
    let selectedMonth = currentMonth;
    let selectedYear = currentYear;

    function generateCalendar(month, year) {
        const firstDay = new Date(year, month, 1).getDay();
        const daysInCurrentMonth = (month === 1 && ((year % 4 === 0 && year % 100 !== 0) || (year % 400 === 0))) ? 29 : daysInMonth[month];

        const calendarBody = document.getElementById("calendar-body");
        calendarBody.innerHTML = "";

        // Show the days of the week header
        document.querySelector(".days-header").style.display = "grid";

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

    // Display the years when clicking on the month/year label
    document.getElementById("month-year").addEventListener("click", () => {
        const calendarBody = document.getElementById("calendar-body");
        calendarBody.innerHTML = "";

        // Hide the days of the week header
        document.querySelector(".days-header").style.display = "none";

        // Show year boxes (range of years around the current year, 50 years before and after)
        const startYear = currentYear - 20;
        const endYear = currentYear + 5;

        for (let i = startYear; i <= endYear; i++) {
            const yearBox = document.createElement("div");
            yearBox.classList.add("year");
            yearBox.textContent = i;
            yearBox.addEventListener("click", () => showMonths(i));
            calendarBody.appendChild(yearBox);
        }
    });

    // Show the months when a year is clicked
    function showMonths(year) {
        selectedYear = year;
        const calendarBody = document.getElementById("calendar-body");
        calendarBody.innerHTML = "";

        // Hide the days of the week header
        document.querySelector(".days-header").style.display = "none";

        // Show month boxes
        monthNames.forEach((month, index) => {
            const monthBox = document.createElement("div");
            monthBox.classList.add("month");
            monthBox.textContent = month;
            monthBox.addEventListener("click", () => generateCalendar(index, year));
            calendarBody.appendChild(monthBox);
        });
    }

    // Go to Today button functionality
    document.getElementById("go-to-today").addEventListener("click", () => {
        selectedMonth = currentMonth;
        selectedYear = currentYear;
        generateCalendar(selectedMonth, selectedYear);
    });

    // Arrow button functionality for previous and next months
    document.getElementById("prev").addEventListener("click", () => {
        selectedMonth--;
        if (selectedMonth < 0) {
            selectedMonth = 11;
            selectedYear--;
        }
        generateCalendar(selectedMonth, selectedYear);
    });

    document.getElementById("next").addEventListener("click", () => {
        selectedMonth++;
        if (selectedMonth > 11) {
            selectedMonth = 0;
            selectedYear++;
        }
        generateCalendar(selectedMonth, selectedYear);
    });

    // Initial calendar load
    generateCalendar(selectedMonth, selectedYear);
</script>
<?php get_footer(); ?>