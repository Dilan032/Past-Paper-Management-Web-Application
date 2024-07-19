<body>
    <?php include 'components/head.php'; ?>
    <?php include 'components/navBar.php'; ?>
    <?php include 'components/loginForm.php'; ?>

    <!-- all subject page title -->
    <div class="container">
       <div class="mb-5 mt-5 d-flex justify-content-start title-bg">
        <div class="p-2 bg-shadow rounded">
                <a href="allSubjectPage.php">
                    <img src="images/back-button.png" alt="home icon" width="40px">
                </a>
            </div>
            <div class="p-2 bg-shadow rounded fs-3 flex-fill">
                <span class="ms-4"><b>1ST YEAR</b></span>
            </div>
       </div>

        <!-- number of year -->
        <div class="mb-4 d-flex justify-content-center fw-bold">
            <div class="p-2 fs-5">
                <a href="#">
                    Software Quality Assurance - 2204  
                </a>
            </div> 
        </div>

        <!-- all paper name section -->
        <section class="all-paper-bg">
            <table class="table w-50 mx-auto text-center">
                <tr>
                    <td>2023 </td>
                    <td><a class="btn btn-primary btn-sm" download="#" href="#">Paper</a></td>
                    <td><a class="btn btn-success btn-sm" download="#" href="#">Answers</a></td>
                    <td><a class="btn btn-secondary btn-sm" download="#" href="#">Paper & Answers</a></td>
                </tr>
                <tr>
                    <td>2022 </td>
                    <td><a class="btn btn-primary btn-sm" href="#">Paper</a></td>
                    <td><a class="btn btn-success btn-sm" href="#">Answers</a></td>
                    <td><a class="btn btn-success btn-sm" href="#">Paper & Answers</a></td>
                </tr>
                <tr>
                    <td>2021 </td>
                    <td><a class="btn btn-primary btn-sm" href="#">Paper</a></td>
                    <td><a class="btn btn-success btn-sm" href="#">Answers</a></td>
                    <td><a class="btn btn-success btn-sm" href="#">Paper & Answers</a></td>
                </tr>
            </table>
        </section>    

    </div>

</body>
</html>