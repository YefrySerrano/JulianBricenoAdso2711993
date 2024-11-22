
<Ejercicio 5 prte 2 en main: 
Abre VS Code y crea una nueva carpeta llamada "mi-git-nombre".
En la barra lateral izquierda, haz clic en el icono de "Source Control" (parece una bifurcación).
=======
<Ejercicio 2:
Trabajando con ramas
Objetivo: 
En la esquina inferior izquierda de VS Code, verás el nombre de tu rama actual (probablemente "main").
Haz clic en este nombre y selecciona "Create new branch" en el menú que aparece.
Nombra la nueva rama "nueva_rama" y presiona Enter.
Modifica el archivo README.md y haz un nuevo commit en esta rama usando el panel de Source Control.
Cambia de vuelta a la rama main haciendo clic en el nombre de la rama en la esquina inferior izquierda.
Observa cómo el contenido de README.md cambia al volver a main.


<Ejercicio 4: 
Pull Requests y Merge.
En VS Code, asegúrate de estar en la rama "nueva_rama".
Haz algunos cambios en README.md y realiza un commit.
En el panel de Source Control, haz clic en los tres puntos (...) y selecciona "Push".
Ve a la vista de "GitHub" en la barra lateral izquierda (puede que necesites hacer clic en el icono de GitHub).
En "Pull Requests", crea un nuevo Pull Request para fusionar "nueva_rama" en "main".
Revisa los cambios y completa la creación del Pull Request.
Cambia a la rama main en VS Code.
En la vista de GitHub, encuentra tu Pull Request y haz clic en "Merge Pull Request".
>>>>>>> 6e5fb7935d16967f1d437aa619a76c1df7cc464b
=======

< Ejercicio 5: 
Resolución de conflictos
Crea una nueva rama llamada "conflicto" desde main.
Modifica una línea específica en README.md y haz un commit.
Vuelve a la rama main, modifica la misma línea de manera diferente y haz un commit.
Intenta fusionar la rama "conflicto" en main (puedes hacer esto creando un Pull Request o usando el comando "Merge Branch" en el menú de Git).
VS Code mostrará los conflictos. Utiliza el editor de fusión de VS Code para resolverlos.
Una vez resueltos, haz stage de los cambios y completa el merge con un commit.
>>>>>>> 05fc657e5327a6ee614937c39c39a44020f0b4a3
