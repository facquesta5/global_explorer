
<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <h3>About Us</h3>
        <p>We are a travel company dedicated to providing memorable travel experiences for our customers. Our team of experts will help you plan your next adventure and create a trip that exceeds your expectations.</p>
      </div>
      <div class="col-md-4">
        <h3>Contact Us</h3>
        <ul>
          <li>Email: info@travelwebsite.com</li>
          <li>Phone: (555) 555-5555</li>
          <li>Address: 123 Main Street, Anytown USA 12345</li>
        </ul>
      </div>
      <div class="col-md-4">
        <h3>Follow Us</h3>
        <ul class="social-icons">
          <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
          <li><a href="#"><i class="fab fa-twitter"></i></a></li>
          <li><a href="#"><i class="fab fa-instagram"></i></a></li>
          <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="copyright">
    <p>Copyright &copy; Travel Website 2023</p>
  </div>
</footer>
<script>
    new Vue({
        el: '#app',
        data: {
            tableCells: [],
            bgColor: '#204d74',
            textColor: 'white',
            themeStylesheet: 'css/light.css',
            iconClass: 'fas fa-moon',
            cookieTheme: false,
            theme: localStorage.getItem('theme') || 'light',
            themeStylesheet: localStorage.getItem('themeStylesheet') || 'css/light.css',
            iconClass: localStorage.getItem('iconClass') || 'fas fa-moon',
        },
        created() {
            this.cookieTheme = this.cookieThemeExists();
        },
        methods: {
            switchTheme() {
                if (this.theme === 'light') {
                    this.theme = 'dark';
                    this.themeStylesheet = 'css/dark.css';
                    this.iconClass = 'fas fa-sun';
                } else {
                    this.theme = 'light';
                    this.themeStylesheet = 'css/light.css';
                    this.iconClass = 'fas fa-moon';
                }
                localStorage.setItem('theme', this.theme);
                localStorage.setItem('themeStylesheet', this.themeStylesheet);
                localStorage.setItem('iconClass', this.iconClass);
            },
            changeTableCellColor1: function() {
                this.resetTable();
                this.tableCells1.forEach(cell => {
                    cell.style.backgroundColor = this.bgColor;
                    cell.style.color = this.textColor;
                });
            },
            changeTableCellColor2: function() {
                this.resetTable();
                this.tableCells2.forEach(cell => {
                    cell.style.backgroundColor = this.bgColor;
                    cell.style.color = this.textColor;
                });
            },
            changeTableCellColor3: function() {
                this.resetTable();
                this.tableCells3.forEach(cell => {
                    cell.style.backgroundColor = this.bgColor;
                    cell.style.color = this.textColor;
                });
            },
            resetTable: function() {
                this.tableCells.forEach(cell => {
                    cell.style.backgroundColor = 'white';
                    cell.style.color = 'black';
                });
            },

            acceptCookieTheme: function() {
                document.cookie = "theme=light; expires=Fri, 31 Dec 9999 23:59:59 GMT;";
                this.cookieTheme = true;
            },
            rejectCookieTheme: function() {
                window.location.replace("https://www.google.com");
            },
            cookieThemeExists: function() { //verifica se já existe um cookie
                return document.cookie.indexOf("theme=light") !== -1;
                this.cookieTheme = true;
            }
        },
        mounted() {
            this.tableCells = document.querySelectorAll('#table td');
            this.tableCells1 = document.querySelectorAll('#table tr:nth-child(1) td');
            this.tableCells2 = document.querySelectorAll('#table tr:nth-child(2) td');
            this.tableCells3 = document.querySelectorAll('#table tr:nth-child(3) td');
        }
    });

    // function deleteCookie(name) {
    //     document.cookie = name + "=;  expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/chatgpt/travel;";
    // }
    // deleteCookie("theme");

    // if (document.cookie.indexOf("theme") >= 0) {
    //     console.log("Cookie exists");
    // } else {
    //     console.log("Cookie does not exist");
    // }
    
</script>