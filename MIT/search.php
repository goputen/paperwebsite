<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Papers</title>
    
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
        }

        .search-container {
            max-width: 500px;
            margin: 0 auto;
            text-align: center;
        }

        input[type="text"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 2px solid #ccc;
            border-radius: 6px;
            font-size: 1rem;
            box-sizing: border-box;
            transition: border-color 0.3s ease;
        }

        input[type="text"]:focus {
            border-color: #007bff;
            outline: none;
        }

        .paper-list {
            list-style-type: none;
            padding: 0;
            margin: 0;
            text-align: left;
            margin-bottom: 50px;

        }

        .paper-list li {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 16px;
            margin-bottom: 10px;
            transition: box-shadow 0.3s ease;
        }

        .paper-list li:hover {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .paper-list li a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
            font-size: 1.1rem;
        }
    </style>
</head>
<body>

    <div class="icon-bar">
        <a  href="http://localhost/mit/home.php"><i class="fa fa-home"></i></a>
        <a  class="active" href="http://localhost/mit/search.php"><i class="fa fa-search"></i></a>
        <a href="http://localhost/mit/download.php"><i class="fa-solid fa-download"></i></a>
        <a href="http://localhost/mit/profile.php"><i class="fa-solid fa-user"></i></a>
    </div>

    <h1>Search Papers</h1>
    
    <div class="search-container">
        <input type="text" id="searchInput" placeholder="Search papers...">
        <ul class="paper-list" id="paperList">
            <!-- List of papers will be dynamically added here -->
        </ul>
    </div>

    <script>
        const url="http://localhost/mit";
      const papers = [
            { name: "Computer Network", link: "/BCA/paper/cn.html" },
            { name: "Office Automation Tools", link: "/BCA/paper/oat.html" },
            { name: "Computer Based Numerical Technique", link: "/BCA/paper/cbnt.html" },
            { name: "System Analysis and Design", link: "/BCA/paper/sad.html" },
            { name: "Operating System", link: "/BCA/paper/os.html" },
            { name: "Software Engineering", link: "/BCA/paper/se.html" },
            { name: "Multimedia", link: "/BCA/paper/mm.html" },
            { name: "Boolean Algebra", link: "/BCA/paper/ba.html" },
            { name: "Web Technology", link: "/BCA/paper/wt.html" },
            { name: "PL/SQL", link: "/BCA/paper/plsql.html" },
            { name: "Distributed System", link: "/BCA/paper/dpc.html" },
            { name: "Software Testing", link: "/BCA/paper/st.html" },
            { name: "PHP Programming", link: "/BCA/paper/php.html" },
            { name: "Software Project Management", link: "/BCA/paper/spm.html" },
            { name: "Unified Modeling Language", link: "/BCA/paper/uml.html" },
            { name: "Programming in C", link: "/BCA/paper/c.html" },
            { name: "Fundamental of Computer", link: "/BCA/paper/foc.html" },
            { name: "English Communication", link: "/BCA/paper/english.html" },
            { name: "Mathematics", link: "/BCA/paper/math.html" },
            { name: "Data Structure and Algorithm", link: "/BCA/paper/dsa.html" },
            { name: "OOPs in C++", link: "/BCA/paper/c++.html" },
            { name: "Environment Studies", link: "/BCA/paper/env.html" },
            { name: "Database Management System", link: "/BCA/paper/dbms.html" }
        ];
        const searchInput = document.getElementById('searchInput');
        const paperList = document.getElementById('paperList');

        function displayResults() {
            const searchValue = searchInput.value.toLowerCase();
            const filteredPapers = papers.filter(paper => paper.name.toLowerCase().includes(searchValue));
            paperList.innerHTML = '';
            filteredPapers.forEach(paper => {
                const listItem = document.createElement('li');
                const link = document.createElement('a');
                link.href = url+paper.link;
                link.textContent = paper.name;
                listItem.appendChild(link);
                paperList.appendChild(listItem);
            });
        }

        searchInput.addEventListener('input', displayResults);
       
    </script>
</body>
</html>
