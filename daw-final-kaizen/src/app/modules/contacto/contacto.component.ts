import {Component, OnInit} from '@angular/core';
import {Contacto} from '../../model/Contacto';
import {NgForm, FormControl, FormGroup} from '@angular/forms';
import {Repository} from '../../model/repo';

@Component({
    selector: 'app-contacto',
    templateUrl: './contacto.component.html',
    styleUrls: ['./contacto.component.css']
})
export class ContactoComponent implements OnInit {

    private contacto: Contacto = new Contacto;
//    private robot: boolean = false;
    public insertado: boolean;
    constructor(private repo: Repository) {}

    ngOnInit() {
    }

    enviarDatos(form: NgForm) {
        let save = this.repo.saveContact(this.contacto).then(res => {
            console.log(res.json());
            let respuesta = res.json();
            if (respuesta.success == true) {
                this.insertado = respuesta.success;
                form.reset();
            }            
        });
    }
}
