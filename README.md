# Lifty

Lifty es un ecommerce de suplementos deportivos. El sistema permite administrar el
catálogo de productos (proteínas, creatinas, pre entrenos, vitaminas), el inventario,
los pedidos y los usuarios de la tienda.

Proyecto del curso **Ambiente Web Cliente Servidor**.

## Integrantes

- Donald Josue Matarrita Solano
- Gabriel David Moreno Jimenez
- Ignacio Hidalgo Mendez
- Jeferson Andrew Fuentes García

## Stack

- PHP (última versión) sobre Apache
- HTML5, CSS3, JavaScript y jQuery
- Bootstrap 5.3
- Tabler Icons

## Estructura del proyecto

El proyecto sigue el patrón **MVC**:

```
lifty/
├── index.php        Punto de entrada
├── Controller/      Controladores
├── Model/           Modelos y acceso a datos
└── View/            Vistas
    ├── layoutExterno.php    Layout de las vistas públicas
    ├── layoutInterno.php    Layout de las vistas privadas
    ├── Inicio/              Una carpeta por módulo
    └── assets/              css, js y fonts
```

Cada módulo nuevo agrega su controlador en `Controller/`, su modelo en `Model/` y su
carpeta de vistas dentro de `View/`.

Como todas las carpetas de módulo quedan al mismo nivel dentro de `View/`, los
enlaces entre vistas de módulos distintos se escriben `../Modulo/archivo.php`, y los
assets siempre `../assets/...`.

### Layouts

Las partes comunes de la interfaz viven en los layouts y se insertan en las vistas
con `include_once`:

- `layoutExterno.php`: `IncludeCSS()`, `MostrarLogo()`, `IncludeJS()`
- `layoutInterno.php`: `IncludeCSS()`, `MostrarHeader()`, `MostrarSidebar()`, `MostrarFooter()`, `IncludeJS()`

## Cómo levantar el proyecto

### Con XAMPP

1. Copiar la carpeta `lifty` dentro de `htdocs`.
2. Iniciar Apache desde el panel de XAMPP.
3. Abrir <http://localhost/lifty>.

### Con Docker

Desde la carpeta que contiene este repositorio:

```bash
docker compose up -d
```

La aplicación queda disponible en <http://localhost:8080>. Para detenerla:

```bash
docker compose down
```

## Flujo de trabajo

El repositorio trabaja con **feature branches**. Nunca se hace commit directo a `main`.

1. Actualizar `main`:

   ```bash
   git checkout main
   git pull origin main
   ```

2. Crear la rama de la tarea:

   ```bash
   git checkout -b feat/nombre-de-la-tarea
   ```

3. Hacer commits con el formato `keyword(scope): mensaje` en inglés:

   ```
   feat(login): add sign in form validation
   fix(register): correct password confirmation check
   docs(readme): update project structure
   style(home): adjust dashboard card spacing
   ```

   Keywords: `feat`, `fix`, `docs`, `style`, `refactor`, `chore`.

4. Subir la rama y abrir un **Pull Request hacia `main`**:

   ```bash
   git push -u origin feat/nombre-de-la-tarea
   ```

5. El PR debe ser revisado por al menos un compañero antes del merge.

Reglas:

- Toda rama sale de `main` y regresa a `main` por PR.
- Prohibido hacer push directo a `main`.
- Una rama por funcionalidad o vista.

## Créditos

La interfaz parte de la plantilla **InApp Inventory Dashboard**, distribuida por
ThemeWagon y desarrollada por CodesCandy bajo licencia MIT.

- Plantilla: <https://themewagon.com/themes/inapp/>

La plantilla fue adaptada al tema del proyecto: se reorganizó bajo el patrón MVC, se
tradujo al español, se reemplazó la marca y los datos de ejemplo por los de Lifty, y
se eliminaron las secciones e imágenes que no forman parte del alcance.
