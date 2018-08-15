import {Injectable} from '@angular/core';
import {DataSource} from './datasource';
import {Contacto} from './Contacto';

@Injectable()
export class Repository {
    private categories: string[] = [];

    constructor(private dataSource: DataSource) {
    }

    saveContact(contacto: Contacto) {        
        return this.dataSource.saveContacto(contacto);
    }
}
