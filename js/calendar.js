const tournaments = [
   {
      name: "Турнир Кандидатов",
      date: "2025-04-15",
      time: "15:00",
      location: "Екатеринбург, Россия",
      rounds: 14,
      ratingLimit: "2300+",
      ageLimit: "18+",
      control: "90 мин + 30 сек",
      link: "https://example.com/kandidaty",
      logo: "img/candidates.png"
   },
   {
      name: "Открытый Кубок Москвы",
      date: "2025-02-10",
      time: "10:00",
      location: "Москва, Россия",
      rounds: 9,
      ratingLimit: "2000+",
      ageLimit: "16+",
      control: "60 мин + 30 сек",
      link: "https://example.com/moscowcup",
      logo: "img/moscow.png"
   },
   {
      name: "Юношеский Турнир Весна",
      date: "2025-02-20",
      time: "11:30",
      location: "Казань, Россия",
      rounds: 7,
      ratingLimit: "1600+",
      ageLimit: "до 18",
      control: "30 мин + 10 сек",
      link: "https://example.com/springjunior",
      logo: "img/junior.png"
   },
   {
      name: "Блиц-турнир «Молния»",
      date: "2025-02-05",
      time: "18:00",
      location: "Санкт-Петербург, Россия",
      rounds: 11,
      ratingLimit: "без ограничений",
      ageLimit: "все",
      control: "3 мин + 2 сек",
      link: "https://example.com/molniya",
      logo: "img/lightning.png"
   },
   {
      name: "Чемпионат школы №12",
      date: "2025-02-01",
      time: "09:00",
      location: "Омск, Россия",
      rounds: 5,
      ratingLimit: "до 1800",
      ageLimit: "до 12",
      control: "15 мин",
      link: "https://example.com/school12",
      logo: "img/school.png"
   },
   {
      name: "Летний Рапид-турнир",
      date: "2025-07-10",
      time: "13:00",
      location: "Ростов-на-Дону, Россия",
      rounds: 7,
      ratingLimit: "1800+",
      ageLimit: "16+",
      control: "15 мин + 10 сек",
      link: "https://example.com/summer-rapid",
      logo: "img/summer.png"
   },
   {
      name: "Мемориал Алехина",
      date: "2025-08-01",
      time: "12:00",
      location: "Париж, Франция",
      rounds: 9,
      ratingLimit: "2200+",
      ageLimit: "все",
      control: "60 мин + 30 сек",
      link: "https://example.com/alekhine",
      logo: "img/alekhine.png"
   },
   {
      name: "Детский турнир «Надежда»",
      date: "2025-09-05",
      time: "10:30",
      location: "Новосибирск, Россия",
      rounds: 6,
      ratingLimit: "до 1400",
      ageLimit: "до 10",
      control: "25 мин",
      link: "https://example.com/nadezhda",
      logo: "img/kids.png"
   },
   {
      name: "Классика осени",
      date: "2025-10-20",
      time: "14:00",
      location: "Калининград, Россия",
      rounds: 11,
      ratingLimit: "2100+",
      ageLimit: "18+",
      control: "90 мин + 30 сек",
      link: "https://example.com/autumnclassic",
      logo: "img/autumn.png"
   },
   {
      name: "Открытый Кубок Сибири",
      date: "2025-11-12",
      time: "09:30",
      location: "Томск, Россия",
      rounds: 10,
      ratingLimit: "без ограничений",
      ageLimit: "все",
      control: "45 мин + 15 сек",
      link: "https://example.com/siberiaopen",
      logo: "img/siberia.png"
   },
   {
      name: "Женский турнир «Весна»",
      date: "2025-03-08",
      time: "11:00",
      location: "Владивосток, Россия",
      rounds: 6,
      ratingLimit: "1600+",
      ageLimit: "все",
      control: "30 мин",
      link: "https://example.com/womenspring",
      logo: "img/woman.png"
   },
   {
      name: "Чемпионат ветеранов",
      date: "2025-04-25",
      time: "10:00",
      location: "Ярославль, Россия",
      rounds: 5,
      ratingLimit: "без ограничений",
      ageLimit: "50+",
      control: "20 мин + 5 сек",
      link: "https://example.com/veterans",
      logo: "img/veterans.png"
   },
   {
      name: "Новогодний Блиц",
      date: "2025-12-30",
      time: "17:00",
      location: "Минск, Беларусь",
      rounds: 13,
      ratingLimit: "без ограничений",
      ageLimit: "все",
      control: "5 мин + 2 сек",
      link: "https://example.com/newyearblitz",
      logo: "img/newyear.png"
   },
   {
      name: "Международный онлайн-кубок",
      date: "2025-06-15",
      time: "16:00",
      location: "Онлайн",
      rounds: 11,
      ratingLimit: "2000+",
      ageLimit: "16+",
      control: "10 мин + 5 сек",
      link: "https://example.com/onlinecup",
      logo: "img/online.png"
   },
   {
      name: "Школьный турнир «Дебют»",
      date: "2025-01-20",
      time: "09:00",
      location: "Тула, Россия",
      rounds: 4,
      ratingLimit: "до 1300",
      ageLimit: "до 14",
      control: "20 мин",
      link: "https://example.com/debut",
      logo: "img/debut.png"
   }
];


const monthFilter = document.getElementById("monthFilter");
const ratingFilter = document.getElementById("ratingFilter");
const controlFilter = document.getElementById("controlFilter");
const cityFilter = document.getElementById("cityFilter");
const searchInput = document.getElementById("searchInput");
const upcomingBtn = document.getElementById("upcomingBtn");
const pastBtn = document.getElementById("pastBtn");
const resetFilters = document.getElementById("resetFilters");
const tournamentList = document.getElementById("tournamentList");
const emptyMessage = document.getElementById("emptyMessage");
let showUpcoming = true;
function classifyControl(controlText) {
   const minutesMatch = controlText.match(/^(\d+)/);
   if (!minutesMatch) return "классика";
   const minutes = parseInt(minutesMatch[1]);
   if (minutes <= 5) return "блиц";
   if (minutes <= 30) return "рапид";
   return "классика";
}
function populateFilters() {
   const months = new Set();
   const cities = new Set();
   tournaments.forEach(t => {
      const [year, month] = t.date.split("-");
      months.add(`${year}-${month}`);
      const city = t.location.split(",")[0].trim();
      cities.add(city);
   });
   monthFilter.innerHTML = `<option value="all">Все месяцы</option>`;
   Array.from(months).sort().forEach(month => {
      const label = new Date(`${month}-01`).toLocaleString("ru-RU", { month: "long", year: "numeric" });
      monthFilter.innerHTML += `<option value="${month}">${label}</option>`;
   });
   cityFilter.innerHTML = `<option value="all">Все города</option>`;
   Array.from(cities).sort().forEach(city => {
      cityFilter.innerHTML += `<option value="${city}">${city}</option>`;
   });
}
function renderTournaments() {
   const now = new Date();
   const selectedMonth = monthFilter.value;
   const selectedRating = ratingFilter.value;
   const selectedControl = controlFilter.value;
   const selectedCity = cityFilter.value;
   const searchTerm = searchInput.value.toLowerCase();
   const filtered = tournaments.filter(t => {
      const eventDate = new Date(`${t.date}T${t.time}`);
      const isUpcoming = eventDate >= now;
      const upcomingMatch = showUpcoming ? isUpcoming : !isUpcoming;
      const monthMatch = selectedMonth === "all" || t.date.startsWith(selectedMonth);
      const ratingMatch = selectedRating === "all" || t.ratingLimit === selectedRating;
      const controlType = classifyControl(t.control);
      const controlMatch = selectedControl === "all" || controlType === selectedControl;
      const cityName = t.location.split(",")[0].trim();
      const cityMatch = selectedCity === "all" || cityName === selectedCity;
      const searchMatch = t.name.toLowerCase().includes(searchTerm);
      return monthMatch && ratingMatch && controlMatch && cityMatch && searchMatch && upcomingMatch;
   });
   tournamentList.innerHTML = "";
   emptyMessage.style.display = filtered.length ? "none" : "block";
   filtered.sort((a, b) => new Date(`${a.date}T${a.time}`) - new Date(`${b.date}T${b.time}`));
   filtered.forEach(t => {
      const li = document.createElement("li");
      li.className = "event-list__item";
      if (new Date(`${t.date}T${t.time}`) >= now) li.classList.add("event-list__item--upcoming");
      li.innerHTML = `
          <img src="${t.logo}" alt="${t.name}" class="event__logo" />
          <div class="event__content">
            <div class="event__name"><strong>${t.name}</strong></div>
            <div class="event__time"><strong><i>${t.date} ${t.time}</i></strong> | ${t.location}</div>
            <div class="event__list">
               <div class="event__control"><strong>Контроль:</strong> ${t.control}</div>
               <div class="event__tours"><strong>Туров:</strong> ${t.rounds}</div>
               <div class="event__rating"><strong>Рейтинг:</strong> ${t.ratingLimit}</div>
               <div class="event__age"><strong>Возраст:</strong> ${t.ageLimit}</div>
            </div>
          </div>
          <div class="event__link">
            <a class="ev-link" href="${t.link}" target="_blank">Смотреть</a>
          </div>
        `;
      tournamentList.appendChild(li);
   });
}
monthFilter.addEventListener("change", renderTournaments);
ratingFilter.addEventListener("change", renderTournaments);
controlFilter.addEventListener("change", renderTournaments);
cityFilter.addEventListener("change", renderTournaments);
searchInput.addEventListener("input", renderTournaments);
upcomingBtn.addEventListener("click", () => { showUpcoming = true; renderTournaments(); });
pastBtn.addEventListener("click", () => { showUpcoming = false; renderTournaments(); });
resetFilters.addEventListener("click", () => {
   monthFilter.value = "all";
   ratingFilter.value = "all";
   controlFilter.value = "all";
   cityFilter.value = "all";
   searchInput.value = "";
   showUpcoming = true;
   renderTournaments();
});
populateFilters();
renderTournaments();