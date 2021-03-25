  
  new Vue({
    el : "#app",
    data : { 
        contacts : [],
        contact :{id: '', name : '', tel : ''}
    },
    created () {
      this.getContacts();
    },
    methods : {
      addContact(){
       axios.post("http://localhost/app-vuejs-php/add_contact.php",{
         name:this.contact.name,
         tel:this.contact.tel
       })
       .then(response=>{this.contacts.push(response.data);
        this.contact={name : '', tel : ''}
      $('#addContact').modal('hide');})
       .catch(err=>console.log(err))
       Swal.fire({
        
        icon: 'success',
        title: 'Le contact a ete ajoute ',
        showConfirmButton: false,
        timer: 2000
      })
      },
     getContacts(){
       axios.get("http://localhost/app-vuejs-php/get_contact.php").then(response =>this.contacts=response.data )
       .catch(err=>console.log(err))
     },
     updateContact(){
      axios.post("http://localhost/app-vuejs-php/update_contact.php",{
        id:this.contact.id,
        name:this.contact.name,
        tel:this.contact.tel
      })
      .then(response=>{
       this.contact={name : '', tel : ''}
       $('#updateContact').modal('hide');
     this.getContacts();
    })
      .catch(err=>console.log(err))
      Swal.fire({
        
        icon: 'success',
        title: 'Le contact a ete modifie ',
        showConfirmButton: false,
        timer: 2000
      })

     },
     getContact(id){
      axios.get("http://localhost/app-vuejs-php/get_contac.php?id="+id)
      .then(response => {
       this.contact=response.data
      }).catch(err=>console.log(err))
    },
     deleteContacts(id){
      Swal.fire({
        title: 'vous etes sur ?',
        text: "le contact est inrecuperable  !",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'oui!',
        cancelButtonText: 'Non!'
      }).then((result) => {
        if (result.isConfirmed) {
          axios.delete("http://localhost/app-vuejs-php/delete_contact.php?id="+id)
       .then(response => {
        this.contacts=this.contacts.filter(contact => {
          return contact.id !==id
        }); 
       }).catch(err=>console.log(err))
          Swal.fire(
            'suprime!',
            'votre contact a ete suprime.',
            'success'
          )
        }
      })
       
     }
    },
    
    

})

