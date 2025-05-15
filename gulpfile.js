import { src, dest, watch } from 'gulp';
import * as dartSass from 'sass';
import gulpSass from "gulp-sass"; //exportamos el paquete de gulp-sass para poder compilar sass desde gulp
const sass = gulpSass(dartSass);
export function css( done ){
    src('src/scss/**/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(dest('dist/css'));
    done();
}
export function dev(){
    watch('src/scss/**/*.scss', css);
}
