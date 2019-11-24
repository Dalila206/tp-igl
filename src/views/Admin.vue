<template>
  <v-data-table
    :headers="headers"
    :items="etudiants"
    sort-by="nom"
    class="elevation-1"
  >
    <template v-slot:top>
      <v-toolbar flat color="white">
        <v-toolbar-title>Listes d'Enseignants</v-toolbar-title>
        <v-divider
          class="mx-4"
          inset
          vertical
        ></v-divider>
        <v-spacer></v-spacer>
        <v-dialog v-model="dialog" max-width="500px">
          <template v-slot:activator="{ on }">
            <v-btn color="primary" dark class="mb-2" v-on="on">Ajouter Enseignant</v-btn>
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
                    <v-text-field v-model="editedItem.groupe" label="groupe"></v-text-field>
                  </v-col>
                  
                </v-row>
              </v-container>
            </v-card-text>

            <v-card-actions>
              <v-spacer></v-spacer>
              <v-btn color="blue darken-1" text @click="close">Cancel</v-btn>
              <v-btn color="blue darken-1" text @click="save">Save</v-btn>
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
  export default {
    data: () => ({
      dialog: false,
      headers: [
       
        { text: 'Nom',align: 'left', value: 'nom' },
        { text: 'Prenom', value: 'prenom' },
        { text: 'groupe', value: 'groupe' },
        
        { text: 'Actions', value: 'action', sortable: false },
      ],
       etudiants: [],
      editedIndex: -1,
      editedItem: {
       
        nom: '',
        prenom: '',
        groupe: '',
       
      },
      defaultItem: {
        
        nom: '',
        prenom: '',
        groupe: '',
        
      },
    }),

    computed: {
      formTitle () {
        return this.editedIndex === -1 ? 'New Item' : 'Edit Item'
      },
    },

    watch: {
      dialog (val) {
        val || this.close()
      },
    },

    created () {
      this.initialize()
    },

    methods: {
      initialize () {
        this.etudiants = [
          {
            
            nom: 'guessas',
            prenom: 'mohand',
            groupe: '1cp5',
           
          },
          {
            
            nom: 'ait benali',
            prenom: 'faycal',
            groupe: '1cs5',
           
          },
          
          {
             
            nom: 'ait benali',
            prenom: 'faycal',
            groupe: '2cp6',
            
          },
         
        ]
      },

      editItem (item) {
        this.editedIndex = this.etudiants.indexOf(item)
        this.editedItem = Object.assign({}, item)
        this.dialog = true
      },

      deleteItem (item) {
        const index = this.etudiants.indexOf(item)
        confirm('Are you sure you want to delete this item?') && this.etudiants.splice(index, 1)
      },

      close () {
        this.dialog = false
        setTimeout(() => {
          this.editedItem = Object.assign({}, this.defaultItem)
          this.editedIndex = -1
        }, 300)
      },

      save () {
        if (this.editedIndex > -1) {
          Object.assign(this.etudiants[this.editedIndex], this.editedItem)
        } else {
          this.etudiants.push(this.editedItem)
        }
        this.close()
      },
    },
  }
</script>