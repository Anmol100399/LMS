/* General Styles */
body {
    font-family: Arial, sans-serif;
    background-color: #eef2f7;
    margin: 0;
    padding: 0;
}

h1 {
    color: #2c3e50;
    margin-bottom: 20px;
    text-align: center;
}

.row {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: center;
}

.col-md-4 {
    flex: 0 0 calc(33.333% - 20px);
    box-sizing: border-box;
}

/* Card Styles */
.card {
    background-color: #ffffff;
    border: 1px solid #dfe4ea;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    transition: transform 0.2s, box-shadow 0.2s;
}

.card:hover {
    transform: translateY(-8px);
    box-shadow: 0 10px 15px rgba(0, 0, 0, 0.2);
}

.card-body {
    padding: 20px;
    text-align: center;
}

.card-title {
    font-size: 1.5rem;
    color: #34495e;
    margin-bottom: 15px;
}

.card-subtitle {
    font-size: 1rem;
    color: #7f8c8d;
    margin-bottom: 10px;
}

.card a {
    text-decoration: none;
    color: #3498db;
    font-weight: bold;
    display: inline-block;
    margin: 10px 0;
    transition: color 0.2s;
}

.card a:hover {
    color: #1d70a2;
    text-decoration: underline;
}

/* Action Links */
.col > a {
    display: inline-block;
    margin: 10px;
    padding: 10px 15px;
    font-size: 1rem;
    color: #ffffff;
    background-color: #3498db;
    border-radius: 5px;
    text-decoration: none;
    transition: background-color 0.3s;
}

.col > a:hover {
    background-color: #1d70a2;
}

/* Responsive Design */
@media (max-width: 768px) {
    .col-md-4 {
        flex: 0 0 calc(50% - 20px);
    }
}

@media (max-width: 480px) {
    .col-md-4 {
        flex: 0 0 calc(100% - 20px);
    }
}