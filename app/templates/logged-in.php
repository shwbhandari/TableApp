<?php
// Start the session
session_start();
?>
<?php $this->layout('_layout'); ?>

<?php $this->start('hero') ?>
    <a href="#" class="inline-flex items-center text-white bg-gray-800 rounded-full p-1 pr-2 sm:text-base lg:text-sm xl:text-base hover:text-gray-200">
        <span class="px-3 py-0.5 text-white text-xs font-semibold leading-5 uppercase tracking-wide bg-auth0 rounded-full">Logged In</span>
        
        <svg class="ml-2 w-5 h-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
        </svg>
    </a>

    <h1 class="mt-4 text-4xl tracking-tight font-extrabold text-white sm:mt-5 sm:leading-none lg:mt-6 lg:text-5xl xl:text-6xl">
        <span class="md:block">Welcome</span>
        <span class="text-auth0 md:block">
            <?php if(isset($session->user['picture'])): ?>
                <span class="inline-block relative">
                    <img class="h-12 w-12 rounded-full" src="<?php echo $session->user['picture'] ?>" alt="">
                </span>
            <?php endif; ?>

            <?php echo $session->user['email'] ?>
        </span>
    </h1>
<?php $this->stop() ?>

<?php $this->start('body') ?>
    <div class="mb-16 w-full lg:grid lg:grid-cols-12 lg:gap-x-5">
        <aside class="py-6 px-2 sm:px-6 lg:py-0 lg:px-0 lg:col-span-3">
            <nav class="space-y-1">
               

                <a href="#create" class="text-gray-900 hover:text-gray-900 hover:bg-gray-50 group rounded-md px-3 py-2 flex items-center text-sm font-medium">
                    <svg class="text-gray-400 group-hover:text-gray-500 flex-shrink-0 -ml-1 mr-3 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z" />
                    </svg>
                    <span class="truncate">
                        Create Tables
                    </span>
                </a>

            
                
                <a href="#insert" class="text-gray-900 hover:text-gray-900 hover:bg-gray-50 group rounded-md px-3 py-2 flex items-center text-sm font-medium">
                    <svg class="text-gray-400 group-hover:text-gray-500 flex-shrink-0 -ml-1 mr-3 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z" />
                    </svg>
                    <span class="truncate">
                        Insert Data into Table
                    </span>
                </a>
                <a href="#display" class="text-gray-900 hover:text-gray-900 hover:bg-gray-50 group rounded-md px-3 py-2 flex items-center text-sm font-medium">
                    <svg class="text-gray-400 group-hover:text-gray-500 flex-shrink-0 -ml-1 mr-3 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z" />
                    </svg>
                    <span class="truncate">
                        Display Tables
                    </span>
                </a>
            </nav>
        </aside>

        <div class="space-y-6 sm:px-6 lg:px-0 lg:col-span-9">
         
        
<?php
  $server = "localhost"; 
  $username = "root";
  $password = "";
  $database="diy";
  $conn = mysqli_connect($server, $username, $password ,$database); 
  $mysqli = new mysqli($server, $username, $password ,$database);

 if (isset($_POST["createTable"])) 
 { 
    $tname= $_POST['tname'];
    $type=$_POST['type'];
    $colname=$_POST['colname'];
    $size=$_POST['size'];
 
 if(! $conn ) 
  {
       die('Could not connect: ' . mysqli_connect_error($conn));
  } 
 if(($type=="char") or ($type=="varchar")){
 $sql ="CREATE TABLE $tname ($colname $type($size))";
 }
 else
  {
    $sql = "CREATE TABLE $tname ("."$colname $type)";
  }

  $mysqli -> select_db("diy");

 $retval = $mysqli -> query( $sql ); 
 if(! $retval ) 
 {
  echo("Cant create " . $mysqli -> error);
 
 } 
 else
 {
     echo "Table created successfully\n";
 }
}

    //for displaying table
   if(isset($_POST['showTable'])){
    $_SESSION['selectable']= $_POST['tname'];
    $tables = $this->db->list_tables();
    }
    else{
    $_SESSION['selectable']='art';
    }
    //for displaying fields to insert data
    if (isset($_POST["display"])) {
    $_SESSION['selectable']= $_POST['tname'];
    }
    else
    {
    $_SESSION['selectable']='art';
    }
    //for inserting data data
    if (isset($_POST["Insert"])) {
     $_SESSION['inserttable']=$_POST['tname'];
    }

   //code for inserting data in database
    if (isset($_POST["insertData"])) {
        unset($_POST['insertData']);
        echo $_SESSION['inserttable'];
        $inserttable =  $_SESSION['inserttable'];
        $newdata = $_POST;
        $columns = implode(', ', array_keys($newdata));
        $values = array_values($newdata);
        $placeholders = implode(', ', array_fill(0, count($values), '?')); 

        $insert_query = "INSERT INTO $inserttable ($columns) VALUES($placeholders)";

        $insert_stmt = $mysqli->prepare($insert_query);

        if($insert_stmt->execute($values)){
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data inserted successfully into table'.$_SESSION['inserttable'].'
           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
           </div>';            
        }else{
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
           Unable to insert data
           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
           </div>';
        } 
        
      
}   
 // mysqli_close($conn); 
  
?>
          
            <div id="create">
                <div class="shadow sm:rounded-md sm:overflow-hidden">
                    <div class="bg-white">
                        <div class="px-4 py-5 sm:px-6 bg-gray-100">
                            <h3 class="text-lg leading-6 font-medium text-gray-900">Create Tables</h3>
                        </div>
                        <p></p>
                        <form method="post" class="container" id="form" enctype="multipart/form-data">
                        <div class="px-4 py-5 sm:px-6 grid grid-cols-6 gap-6">
                                
                                <div class="col-span-6">
                                    <label  class="block text-sm font-medium text-gray-700">Table name</label>
                                    <input placeholder="Table Name" type="text"  name="tname" id="tname" class="mt-1 block w-full bg-white border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                </div>
                                
                                <div class="col-span-6">
                                    <label  class="block text-sm font-medium text-gray-700">Column name</label>
                                    <input placeholder="Table Name" type="text"  name="colname" id="colname" class="mt-1 block w-full bg-white border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                </div>
                                <div class="col-span-6">
                                    <label  class="block text-sm font-medium text-gray-700">Select Column Type</label>
                                    <select  name="type" class="mt-1 block w-full bg-white border border-gray-300 rounded-md shadow-sm py-2 px-3" aria-label="Default select example">
                                    <option selected>column type</option>
                                    <option value="varchar">string</option>
                                    <option value="int">Number</option>
                                    <option value="boolean">Boolean</option>
                                    <option value="varchar" >email</option>
                                    <option value="timestamp">Datetime</option>
                                    </select>
                                </div> 
                                <div class="col-span-6">
                                    <label  class="block text-sm font-medium text-gray-700">(enter size for string or email)</label>
                                    <input placeholder="Size" type="text"  name="size" id="size" class="mt-1 block w-full bg-white border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                </div>          
                                <div class="col-span-6">
                                    <button  type="submit" name="createTable" class="btn btn-secondary"><span><strong>Create</strong></span></button>
                                 </div>             
                          
                        </div>
                    </div>
                </div>
            </div>
            
              <!-- Insert Table Section -->
              <div id="insert">
                <div class="shadow sm:rounded-md sm:overflow-hidden">
                    <div class="bg-white">
                        <div class="px-4 py-5 sm:px-6 bg-gray-100">
                            <h3 class="text-lg leading-6 font-medium text-gray-900">Insert rows in Tables</h3>
                        </div>
                       
                            <div class="px-4 py-5 sm:px-6 grid grid-cols-6 gap-6">
                            <form method="post" class="container" id="showform" enctype="multipart/form-data">
                                <div class="col-span-6">
                                    <label  class="block text-sm font-medium text-gray-700">Select Table name</label>
                                    <select name="tname" class="mt-1 block w-full bg-white border border-gray-300 rounded-md shadow-sm py-2 px-3" aria-label="Default select example">
                                    <?php                                        
                                        $tableList = array();
                                        $res = $mysqli->query("SHOW TABLES");
                                        while($cRow = mysqli_fetch_array($res))
                                        {
                                          $tableList[] = $cRow[0];
                                        }
                                        foreach ($tableList as $table) {                                                                   
                                    ?> 
                                    <option value="<?php echo $table; ?>"><?php echo $table ;?></option> 
                                    <?php
                                    }
                                    ?>
                                    </select>
                                </div>
                            
                                <div class="col-span-6">
                                    <button type="submit" name="Insert" class="btn btn-secondary align-center text-center"><span><strong>Submit</strong></span></button>
                                </div> 
                                </form>
                                
                               <div class="col-span-6">
                                <?php   
                                                       
                                $res = $mysqli->query('SELECT * FROM '.$_SESSION['inserttable']);
                                $data = $res->fetch_all(MYSQLI_ASSOC);
                                
                                echo '
                                <form method="post" class="insertform" id="insertform" enctype="multipart/form-data">
                                <div class="col-span-6"> 
                                <p class="mt-1 text-md text-center font-medium text-gray-700">Enter data for inserting data</p>';
                                $coltype='text';
                                foreach ($res->fetch_fields() as $column) {
                                    echo '<label class="block text-md font-medium text-gray-700">'.htmlspecialchars($column->name).'</label>';
                                    
                                    if(htmlspecialchars($column->type)=='253'){
                                        $coltype='text';
                                    }
                                    elseif(htmlspecialchars($column->type)=='7'){
                                        $coltype='datetime';
                                    }
                                    elseif(htmlspecialchars($column->type)=='1'){
                                        $coltype='checkbox';
                                    }
                                    elseif(htmlspecialchars($column->type)=='3'){
                                        $coltype='number';
                                    }
                                    echo  '<input placeholder="Enter  '.$coltype.' only" type="'.$coltype.'"  name="'.htmlspecialchars($column->name).'"  class="mt-1 block w-full bg-white border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">';
                                }
                                echo '

                                </div>
                               <br>
                                <div class="col-span-6"> 
                                <button type="submit" name="insertData" class="btn btn-secondary align-center text-center"><span><strong>Insert</strong></span></button>
                                </div>
                                </form><hr>
                                <h3 class="text-lg leading-6 font-medium text-gray-900">Table Data</h3>';                 
                             
                                echo ' <table class="table table-striped">';
                                // Display table header
                                echo '<thead>';
                                echo '<tr>';
                                foreach ($res->fetch_fields() as $column) {
                                    echo '<th scope="col">'.htmlspecialchars($column->name).'</th>';
                                }
                                echo '</tr>';
                                echo '</thead> <tbody>';
                                // If there is data then display each row
                                if ($data) {
                                    foreach ($data as $row) {
                                        echo '<tr scope="row">';
                                        foreach ($row as $cell) {
                                            echo '<td>'.htmlspecialchars($cell).'</td>';
                                        }
                                        echo '</tr>';
                                    }
                                } else {
                                    echo '<tr><td colspan="'.$res->field_count.'">No records in the table!</td></tr>';
                                }
                                echo '</tbody></table>';                                                        
                                                                                                            
                                ?>
                                </div>
                                           
                            </div>
                        </div>
                    </div>
                </div>
           

         <!-- end of insert table section  -->

            <!-- Display table section -->
            <div id="display">
                <div class="shadow sm:rounded-md sm:overflow-hidden">
                    <div class="bg-white">
                        <div class="px-4 py-5 sm:px-6 bg-gray-100">
                            <h3 class="text-lg leading-6 font-medium text-gray-900">Display Tables</h3>
                        </div>
                        <form method="post" class="container" id="showform" enctype="multipart/form-data">
                            <div class="px-4 py-5 sm:px-6 grid grid-cols-6 gap-6">
                                <div class="col-span-6">
                                    <label  class="block text-sm font-medium text-gray-700">Select Table name</label>
                                    <select name="tname" class="mt-1 block w-full bg-white border border-gray-300 rounded-md shadow-sm py-2 px-3" aria-label="Default select example">
                                    <?php 
                                        
                                        $tableList = array();
                                        $res = $mysqli->query("SHOW TABLES");
                                        while($cRow = mysqli_fetch_array($res))
                                        {
                                          $tableList[] = $cRow[0];
                                        }
                                        foreach ($tableList as $table) {                                                                   
                                    ?> 
                                    <option value="<?php echo $table; ?>"><?php echo $table ;?></option> 
                                    <?php
                                    }
                                    ?>
                                    </select>
                                </div>
                                    
                                <div class="col-span-6">
                                    <button  type="submit" name="display" class="btn btn-secondary"><span><strong>Submit</strong></span></button>
                                </div> 
                                <div class="col-span-6">
                                <?php   
                                                       
                                $res = $mysqli->query('SELECT * FROM '.$_SESSION['selectable']);
                                $data = $res->fetch_all(MYSQLI_ASSOC);
                                
                                echo ' <table class="table table-striped">';
                                // Display table header
                                echo '<thead>';
                                echo '<tr>';
                                foreach ($res->fetch_fields() as $column) {
                                    echo '<th scope="col">'.htmlspecialchars($column->name).'</th>';
                                }
                                echo '</tr>';
                                echo '</thead> <tbody>';
                                // If there is data then display each row
                                if ($data) {
                                    foreach ($data as $row) {
                                        echo '<tr scope="row">';
                                        foreach ($row as $cell) {
                                            echo '<td>'.htmlspecialchars($cell).'</td>';
                                        }
                                        echo '</tr>';
                                    }
                                } else {
                                    echo '<tr><td colspan="'.$res->field_count.'">No records in the table!</td></tr>';
                                }
                                echo '</tbody></table>';                                                        
                              
                                ?>
                                </div>
                                           
                            </div>
                        </div>
                    </div>
                </div>
                </div>
        
        
      
        </div>

    </div>
    
<?php $this->stop() ?>

