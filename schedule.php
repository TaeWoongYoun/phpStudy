<?php $conn = mysqli_connect('localhost', 'root', '', 'bk_user')?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>쇼핑몰 일정</title>
    <link rel="stylesheet" href="crud.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    
    <?php 
        require('./lib/header.php')
    ?>
    
    <div class="content">
        <table class="calender">
            <tr>
                <th style="color: red;">일</th>
                <th>월</th>
                <th>화</th>
                <th>수</th>
                <th>목</th>
                <th>금</th>
                <th style="color: blue;">토</th>
            </tr>
            <tr>
                <td style="color: grey;">31</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td style="color: blue;">6</td>
            </tr>
            <tr>
                <td style="color: red;">7</td>
                <td>8</td>
                <td>9</td>
                <td>10</td>
                <td>11</td>
                <td>12</td>
                <td style="color: blue;">13</td>
            </tr>
            <tr>
                <td style="color: red;">14</td>
                <td>15</td>
                <td>16</td>
                <td>17</td>
                <td>18</td>
                <td>19</td>
                <td style="color: blue;">20</td>
            </tr>
            <tr>
                <td style="color: red;">21</td>
                <td>22</td>
                <td>23</td>
                <td>24</td>
                <td>25</td>
                <td>26</td>
                <td style="color: blue;">27</td>
            </tr>
            <tr>
                <td style="color: red;">28</td>
                <td>29</td>
                <td>30</td>
                <td>31</td>
                <td style="color: grey;">1</td>
                <td style="color: grey;">2</td>
                <td style="color: grey;">3</td>
            </tr>
        </table>
    </div>

    <footer>
        <p class="copy">ⓒBookMarket</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>