<template>
  <v-data-table
    :headers="headers"
    :items="etudiants"
    sort-by="nom"
    class="elevation-1"
  >
  {{etudiants}}
    <template v-slot:top>
      <v-toolbar flat color="white">
        <v-toolbar-title>Groupe 05</v-toolbar-title>
        <v-divider
          class="mx-4"
          inset
          vertical
        ></v-divider>
        <v-spacer></v-spacer>
        <v-dialog v-model="dialog" max-width="500px">
          <template v-slot:activator="{ on }">
            <v-btn color="primary" dark class="mb-2" @click="charger">charger le Groupe</v-btn>
           <v-btn color="primary" dark class="mb-2" v-on="on">Ajouter Etudiant</v-btn>
            
          </template>
          <v-card>
            <v-card-title>
              <span class="headline">{{ formTitle }}</span>
            </v-card-title>

            <v-card-text>
              <v-container>
                <v-row>
                  <v-col cols="12" sm="6" md="4">
                    <v-text-field v-model="editedItem.nom" label="nom"></v-text-field>
                  </v-col>
                  <v-col cols="12" sm="6" md="4">
                    <v-text-field v-model="editedItem.prenom" label="prenom"></v-text-field>
                  </v-col>
                  <v-col cols="12" sm="6" md="4">
                    <v-text-field v-model="editedItem.notes" label="notes"></v-text-field>
                  </v-col>
                  
                </v-row>
              </v-container>
            </v-card-text>

            <v-card-actions>
              <v-spacer></v-spacer>
              <v-btn color="blue darken-1" text @click="close">Annuler</v-btn>
              <v-btn color="blue darken-1" text @click="save">Enregistrer</v-btn>
            </v-card-actions>
          </v-card>
        </v-dialog>
      </v-toolbar>
    </template>
    <template v-slot:item.action="{ item }">
      <v-icon
        small
        class="mr-2"
        @click="editItem(item)"
      >
        edit
      </v-icon>
      <v-icon
        small
        @click="deleteItem(item)"
      >
        delete
      </v-icon>
    </template>
    
  </v-data-table>
</template>
<script>
import $axios from 'axios';
  export default {
    data: () => ({
      dialog: false,
      headers: [
        {
          text: 'Identifiant',
          align: 'left',
          sortable: false,
          value: 'id',
        },
        { text: 'Nom', value: 'nom' },
        { text: 'Prenom', value: 'prenom' },
        { text: 'Note', value: 'notes' },
        
        { text: 'Actions', value: 'action', sortable: false },
      ],
       etudiants: [],
      editedIndex: -1,
      editedItem: {
        id: '',
        nom: '',
        prenom: '',
        notes: '',
        },
        deletedItem: {
        id: '',
        nom: '',
        prenom: '',
        notes: '',
        },
      defaultItem: {
        id: '',
        nom: '',
        prenom: '',
        notes: '',
      },
    }),

    computed: {
      formTitle () {
        return this.editedIndex === -1 ? 'AOUTER' : 'MODIFIER'
      },
    },

    watch: {
      dialog (val) {
        val || this.close()
      },
    },

    created () {
      this.charger()
    },
    methods: {

      charger () {
        $axios.get('http://127.0.0.1:8000/api/afficher')
        .then( response =>  (this.etudiants = response.data))
        .catch(error => (this.etudiants=error))
        
     
         
      },
      

      editItem (item) {
        this.editedIndex = this.etudiants.indexOf(item)
        this.editedItem = Object.assign({}, item)
        this.dialog = true
        
        
      },

      deleteItem (item) {
        
        const index = this.etudiants.indexOf(item)
        
        confirm('Are you sure you want to delete this item?') && $axios.delete('http://127.0.0.1:8000/api/groupe/supprimer/'+this.etudiants[index].id) && this.etudiants.splice(index, 1)
       

      },

      close () {
        this.dialog = false
        setTimeout(() => {
          this.editedItem = Object.assign({}, this.defaultItem)
          this.editedIndex = -1
        }, 300)
      },

      save () {
        //var id=this.editedItem.id;
        if (this.editedIndex > -1) {
          Object.assign(this.etudiants[this.editedIndex], this.editedItem)
          $axios.put('http://127.0.0.1:8000/api/groupe/modifier/'+this.editedItem.id,this.etudiants[this.editedIndex])
        
        } else {
          this.etudiants.push(this.editedItem)
          $axios.post('http://127.0.0.1:8000/api/create',this.editedItem)
        
        }
        this.close()
      },
    },
  }
</script>