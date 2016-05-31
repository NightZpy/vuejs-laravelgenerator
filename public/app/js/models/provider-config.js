var objectRow = {            
    id:         "",
    code:       "",
    name:       "",
    specialty: "",
    district:   "",
    address:    "",
    phone: "",
    movil1: "",
    movil2: "",
    contact: "",
    email: ""
};

var tableColumns = [
    {
        name: 'id',
        sortField: 'id',
    },
    {
        name: 'code',
        sortField: 'code',
    },
    {
        name: 'name',
        sortField: 'name',
    },
    {
        name: 'specialty',
        sortField: 'specialty',
    },
    {
        name: 'district',
        sortField: 'district',
    },
    {
        name: 'address',
        sortField: 'address',
    },
    {
        name: 'phone',
        sortField: 'phone',
    },    
    {
        name: 'movil1',
        sortField: 'movil1',
    },
    {
        name: 'movil2',
        sortField: 'movil2',
    },       
    {
        name: 'contact',
        sortField: 'contact',
    },
    {
        name: 'email',
        sortField: 'email',
    },                
    {
        name: '__actions',
        dataClass: 'center aligned',
        callback: null
    }        
];

var token = '{{ csrf_token() }}';

var apiUrl = { 
    show:  "{{ route('api.v1.providers.show') }}/",
    index: "{{ route('api.v1.providers.index') }}",  
    store: "{{ route('api.v1.providers.store') }}",  
    update: "{{ route('api.v1.providers.update') }}/",  
    delete: "{{ route('api.v1.providers.delete') }}/"
};

var fieldInitOrder = 'name';

var onLoadSuccess = function(data, highlight, searchFor) {
    if (this.searchFor !== '') {
        for (n in data) {
            data[n].name = highlight(searchFor, data[n].name);
            data[n].code = highlight(searchFor, data[n].code);
            data[n].email = highlight(searchFor, data[n].email);
        }
    }
};