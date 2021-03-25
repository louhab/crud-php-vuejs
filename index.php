<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"  >
    

    <title>CRUD app vuejs </title>
  </head>
  <body class="">
    <div id="app">
    
        <div class="container">
            <div class="row mt-4">
            
                <div class="col-mx-8 col-md-8 col-lg-8 mx-auto">
                    <div class="card border-primary">
                    
                    <div class="card-body">
                            <table class="table table-hover mt-4">
                            <a 
                        data-toggle="modal"
                        data-target="#addContact"
                        href="" class="btn btn-primary mt-4">  ajouter  </a>
                        
                                <thead>
                                    <tr>
                                        <th>nom/prenom</th>
                                        <th>telephonne </th>
                                        <th>Action </th>
                                    </tr>
                                </thead>
                                <tbody v-for="(contact,index) in contacts">
                                    <tr key="index">
                                        <td>{{contact.name}}</td>
                                        <td>{{contact.telephonne}}</td>
                                        <td><a
                                            @click="getContact(contact.id)"
                                             data-toggle="modal"
                                             data-target="#updateContact"
                                             class="btn btn-sm btn-warning"> Modifier</a>
                                             <a @click="deleteContacts(contact.id)"
                                                class="btn btn-sm btn-danger"> Suprimer </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

            <div id="addContact" class="modal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Ajouter contact </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="from-group">
                            <input type="text" name="name" v-model="contact.name" class="form-control" placeholder=" nom & prenom ">
                            <input type="text" name="tel" v-model="contact.tel" class="form-control mt-4" placeholder=" telephonne ">
                        </div>
                   </div>
                <div class="modal-footer">
                    <button @click="addContact()" class="btn btn-primary mt-4"> valider </button>
                </div>
            </div>
            </div>
            </div> 


            <div id="updateContact" class="modal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Modifier contact </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="from-group">
                            <input type="text" name="name2" v-model="contact.name" class="form-control" placeholder=" nom & prenom ">
                            <input type="text" name="tel2" v-model="contact.tel" class="form-control mt-4" placeholder=" telephonne ">
                        </div>
                   </div>
                <div class="modal-footer">
                    <button @click="updateContact()" class="btn btn-primary mt-4"> Modifier  </button>
                </div>
            </div>
            </div>
            </div>

    </div>
    
    
    
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="js/main.js">

</script>
  </body>

  
  </html>