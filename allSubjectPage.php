<body>
    <?php include 'include/head.php'; ?>
    <?php include 'include/navBar.php'; ?>
    <?php include 'include/loginForm.php'; ?>

    <!-- all subject page title -->
    <div class="container">
       <div class="mb-5 mt-5 d-flex justify-content-start title-bg">
        <div class="p-2 bg-shadow rounded">
                <a href="index.php">
                    <img src="images/home-button.png" alt="home icon" width="40px">
                </a>
            </div>
            <div class="p-2 bg-shadow rounded fs-3 flex-fill">
                <span class="ms-4">HNDIT Past Papers</span>
            </div>
       </div>

        <!-- number of year -->
        <div class="mb-4 d-flex justify-content-center fw-bold gap-5">
            <div class="p-2  fs-5 title-bg bg-shadow rounded">
                <a href="#"> 1st YEAR  </a> 
            </div>
            <div class="p-2  fs-5 title-bg bg-shadow rounded">
                <a href="#"> 2nd YEAR </a>
            </div>   
        </div>

        <!-- all paper name section -->
        <section class="all-paper-bg text-center">
            <h5 class="text-decoration-underline underline-space mb-4">1st Semester</h5>
            <table class="table w-50 mx-auto">
                <tr>
                    <td class="col-1">1. </td>
                    <td class="col-7">Enterprise Architecture</td>
                    <td class="col-2"> HNDIT4232 </td>
                    <td class="col-2">
                        <a class="btn btn-primary btn-sm" href="oneSubjectPage.php">View</a>
                    </td>
                </tr>
                <tr>
                    <td class="col-1">2. </td>
                    <td class="col-7">IT Project Management</td>
                    <td class="col-2"> HNDIT4032 </td>
                    <td class="col-2">
                        <a class="btn btn-primary btn-sm" href="oneSubjectPage.php">View</a>
                    </td>
                </tr>
                <tr>
                    <td class="col-1">3. </td>
                    <td class="col-7">Machine Learning</td>
                    <td class="col-2"> HNDIT4212 </td>
                    <td class="col-2">
                        <a class="btn btn-primary btn-sm" href="oneSubjectPage.php">View</a>
                    </td>
                </tr>
                <tr>
                    <td class="col-1">4. </td>
                    <td class="col-7">Software Quality Assurance</td>
                    <td class="col-2"> HNDIT4022 </td>
                    <td class="col-2">
                        <a class="btn btn-primary btn-sm" href="oneSubjectPage.php">View</a>
                    </td>
                </tr>
                <tr>
                    <td class="col-1">5. </td>
                    <td class="col-7">Software Engineering</td>
                    <td class="col-2"> HNDIT4042 </td>
                    <td class="col-2">
                        <a class="btn btn-primary btn-sm" href="oneSubjectPage.php">View</a>
                    </td>
                </tr>
            </table>

            <!-- 2nd semester -->
            <h5 class="text-decoration-underline underline-space mt-5 mb-3">2nd Semester</h5>
            <table class="table w-50 mx-auto">
                <tr>
                    <td class="col-1">1. </td>
                    <td class="col-7">Software Quality Assurance</td>
                    <td class="col-2"> HNDIT4232 </td>
                    <td class="col-2">
                        <a class="btn btn-primary btn-sm" href="oneSubjectPage.php">View</a>
                    </td>
                </tr>
                <tr>
                    <td class="col-1">2. </td>
                    <td class="col-7">IT Project Management</td>
                    <td class="col-2"> HNDIT4032 </td>
                    <td class="col-2">
                        <a class="btn btn-primary btn-sm" href="oneSubjectPage.php">View</a>
                    </td>
            </table>
        </section>    

    </div>

    <?php include 'include/footer.php'; ?>
</body>
</html>