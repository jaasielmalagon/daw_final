import {Injectable} from '@angular/core';
import {Http} from '@angular/http';
import {Contacto} from './Contacto';
import {Observable} from 'rxjs';
import {map} from 'rxjs/operators';

const PROTOCOL = 'http';
const PORT = 8080;

@Injectable()
export class DataSource {
    baseUrl: string;
    constructor(private http: Http) {
        this.baseUrl = PROTOCOL + `://localhost:81/MyAPI/DAW_FINAL/api_final_daw`;
        }

//    getProducts(): Observable<Product[]    > {
//        return this.http.get(this.baseUrl + "/products").pipe(map(response => response.json()    ));
//    }

    saveContacto(contacto: Contacto) {
        return this.http.post(this.baseUrl + "/users", contacto).toPromise();
    }
}
