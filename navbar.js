document.write(`

<nav>
    <input type="checkbox" id="check" />
    <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>

    </label>
    <div class="logo-container">
        <img src="./Images/Logo.png" alt="">
        <div class="title">
            <span style="font-weight: 700;">Assam Don Bosco University</span>
            <span>Department of Computer Science</span>
        </div>
    </div>

    <ul>
        <li><a href="./index.html">Home</a></li>
        <li>
            <div class="dropdown">
                <button class="dropbtn">About</button>
                <div class="dropdown-content">
                <ul>
                    <li><a href="./aboutUs.html">About Us</a></li>
                    <li><a href="./faculty.html">Faculty</a></li>
                    <li><a href="./lab.html">Labratory</a></li>
                </ul>
                </div>
            </div>
        </li>
        <li><a href="./admission.html">Admission</a></li>
        <li><a href="./placement.html">Placements</a></li>
        <li><a href="./scholarship.html">Scholarships</a></li>
    </ul>
</nav>
`);
