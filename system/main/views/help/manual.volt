\documentclass[a4paper, 9pt, conference]{article}              % Book class in 9 points % letterpaper, legalpaper

%usepackage[utf8]{inputenc}
%usepackage[english]{babel}
\usepackage[english,spanish]{babel}
\usepackage[latin1]{inputenc}

\usepackage{multicol}
%usepackage{tasks}

\usepackage{wrapfig}
\usepackage[table,xcdraw]{xcolor}
\usepackage{caption}

\usepackage[pdftex]{graphicx}

\usepackage{hyperref}

%usepackage{amssymb}
\usepackage{amsmath}
%usepackage{mathtools}
%usepackage{zed-csp}
%usepackage{amsthm}
\usepackage{numprint}
\usepackage{nicefrac}
%usepackage{relsize}
\usepackage{listings}
%usepackage{chngcntr}

\newtheorem{theorem}{Teorema}[section]
\newtheorem{heuristic}[theorem]{Heur\'istica}

\lstdefinelanguage{sql}{
 alsodigit = {-},
 morecomment=[l]{--}, % l is for line comment
 morecomment=[s]{/*}{*/}, % s is for start and end delimiter
}

\lstset{
	language={sql},
	%numbers=left,
	%breaklines=true,
	backgroundcolor=\color{black!10},
	tabsize=2,
	%\basicstyle=\tiny,%\ttfamily,
	%literate={\ \ }{ {\ } }1
	commentstyle=\color{gray}
}

\hypersetup{
	%frenchlinks=true,
	linktocpage=true,
	colorlinks=false,
	%linkcolor=tec,%=red,%black!40,
	%citecolor=tec,%=red,
	%filecolor=tec,%black,
	%urlcolor=tec,%black,
	%linkbordercolor={.89 .13 .21},
	%citebordercolor={.41 .85 .15},
	%urlbordercolor={0 0 1},
	pdftitle={Manual de usuario} %,
	%pdfpagemode=FullScreen
}

\graphicspath{ {img/} }

\begin{document}

\title{Sistema de informaci\'on, Manual de usuario}

%author{
	%Wilberth Castro \\
	%small{\texttt{wilz04@gmail.com}}
%}

\date{\small{04 de setiembre 2023}}

\maketitle


\begin{abstract}
	Este documento contiene un manual de usuario mediante el que el personal de las diferentes direcciones y dependencias del Ministerio de Educaci\'on P\'ublica de Costa Rica podr\'a ser guiado en los procesos necesarios para el mantenimiento de la base de datos del tablero de indicadores para el proceso de planificaci\'on del presupuesto por resultados para el ministerio. En este documento (1) se describe el prop\'osito del documento y la audiencia a la que se dirige, (2) se informa sobre los requisitos para la utilizaci\'on del sistema de informaci\'on, (3) se describe los casos de uso del sistema de informaci\'on mediante los que ser\'a posible mantener la base de datos, y (4) se describe otros casos de uso del sistema de informaci\'on mediante los que ser\'a posible administrar la p\'agina de bienvenida, la p\'agina que contiene el tablero.
\end{abstract}

% --------------------------------------------------------------------------------------------------------------------------------
\section{Prop\'osito y audiencia para el documento} \label{sec:goal}

El prop\'osito de este documento es servir de gu\'ia en el uso del sistema de informaci\'on que mantiene la base de datos del tablero de indicadores, los indicadores necesarios en el proceso de planificaci\'on del presupuesto por resultados para el Ministerio de Educaci\'on P\'ublica de Costa Rica. Este documento est\'a dirigido al personal de las diferentes direcciones y dependencias del ministerio que trabajar\'a en el mantenimiento de la base de datos del tablero de indicadores.

% --------------------------------------------------------------------------------------------------------------------------------
\section{Introducci\'on} \label{sec:intro}

Este documento contiene un manual de usuario mediante el que el personal de las diferentes direcciones y dependencias del Ministerio de Educaci\'on P\'ublica de Costa Rica podr\'a ser guiado en los procesos necesarios para el mantenimiento de la base de datos del tablero de indicadores, tablero que facilitar\'a el proceso de planificaci\'on del presupuesto por resultados para el ministerio.

En general, la planificaci\'on de un presupuesto por resultados requiere del establecimiento y la evaluaci\'on peri\'odica de indicadores de resultados, el proceso de planificaci\'on del presupuesto por resultados es un proceso iterativo que requiere revisi\'on y ajuste continuo a lo largo del tiempo, por lo tanto es fundamental disponer de datos precisos y actualizados. El tablero de indicadores permitir\'a facilitar el desarrollo de esta actividad.

% --------------------------------------------------------------------------------------------------------------------------------
\section{Requisitos para la utilizaci\'on} \label{sec:req}

El sistema de informaci\'on y el tablero de indicadores est\'an certificados para trabajar en los navegadores de escritorio (1) Microsoft Edge versi\'on 116.0.1938.69, Compilaci\'on oficial, 64 bits (2) Mozilla Firefox versi\'on 117.0, 64 bits y (3) Google Chrome versi\'on 116.0.5845.141, Compilaci\'on oficial, 64 bits.

Se recomienda una velocidad de descarga desde Internet de 2 Megabytes como m\'inimo, de lo contrario, el rendimiento para el sistema de informaci\'on y para el tablero de indicadores podr\'ia no ser el \'optimo.

% --------------------------------------------------------------------------------------------------------------------------------
\section{Casos de uso del sistema de informaci\'on} \label{sec:use}

El sistema de informaci\'on debe ser accesado mediante uno de los navegadores mencionados en la secci\'on \ref{sec:req}. En el sitio Web del ministerio se ubicar\'a un enlace que al ser presionado dirigir\'a al usuario a la p\'agina de bienvenida del sistema de informaci\'on. La p\'agina web en la figura \ref{fig:dash} corresponde a la p\'agina de bienvenida. Seg\'un la figura, la p\'agina de bienvenida dispone de un componente de visualizaci\'on de indicadores, un componente de visualizaci\'on de datos geogr\'aficos, un cat\'alogo de productos, un formulario de solicitud de informaci\'on y un enlace al formulario de autenticaci\'on. Al presionar el enlace, el formulario de autenticaci\'on es desplegado, y al digitar los datos de acceso y presionar el bot\'on para ingresar, si los datos son aut\'enticos, el men\'u administrativo es desplegado\footnote{El usuario debe autenticarse para poder acceder al men\'u administrativo, las opciones del men\'u var\'ian en funci\'on del perfil del usuario.}, el men\'u que permite el acceso a los formularios de mantenimiento.

%paragraph{Componente de visualizaci\'on de indicadores.}

%paragraph{Componente de visualizaci\'on de datos geogr\'aficos.}
 
\subsection{Despliegue de los productos en el cat\'alogo}

El cat\'alogo de productos es una lista de documentos organizada en forma de \'arbol, en el que cada nodo no terminal corresponde a una categor\'ia, y cada nodo terminal corresponde a un documento. Al presionar el t\'itulo de un documento, el navegador despliega una nueva p\'agina o una descarga, seg\'un el tipo de contenido del documento.

\subsection{Solicitud de informaci\'on}

El formulario de solicitud de informaci\'on est\'a disponible para que cualquier usuario pueda solicitar informaci\'on que no pueda obtener a trav\'es del sistema de informaci\'on o del tablero de indicadores. El acceso al formulario requiere de la autenticaci\'on del usuario. En el campo bajo la leyenda ``Nombre de la direcci\'on y/o departamento a la que dirige la solicitud'' el usuario debe especificar el destinatario de la solicitud, el destinatario por omisi\'on es La Contralor\'ia de Servicios. Al enviar el formulario, la solicitud de informaci\'on ser\'a registrada en la base de datos.

\subsection{Autenticaci\'on}

La autenticaci\'on es necesaria para acceder al formulario de solicitud de informaci\'on y para acceder a los formularios de mantenimiento. La siguiente lista describe el procedimiento de autenticaci\'on.

\begin{enumerate}
	\item El enlace con la leyenda ``Inicia sesi\'on'' debe ser presionado, esto provocar\'a el despliegue del formulario de autenticaci\'on.
	\item El usuario debe ingresar sus datos de acceso en los campos del formulario y luego presionar el bot\'on con la leyenda ``Entrar''.
	\item En caso de que los datos de acceso no sean aut\'enticos, el navegador no permitir\'a el acceso, informar\'a lo sucedido y permitir\'a volver a intentar. En caso contrario, el navegador desplegar\'a el men\'u administrativo.
\end{enumerate}

El sistema cuenta con un mecanismo para el registro de nuevos usuarios, que puede ser activado al presionar el enlace con la leyenda ``abre tu cuenta'', y otro para la recuperaci\'on de contrase\~nas olvidadas, que puede ser activado al presionar el enlace con la leyenda ``?`Olvidaste tu \emph{password}?''. Mediante el men\'u administrativo, el usuario puede acceder a los formularios de mantenimiento, la disponibilidad de cada formulario depender\'a del perfil del usuario.

\subsection{Mantenimiento de datos}
 
La primera opci\'on del men\'u administrativo es la opci\'on ``Inicio'', esta opci\'on permite volver a la p\'agina de bienvenida, independientemente de la ubicaci\'on actual del usuario. Cada una de las otras opciones en el men\'u administrativo permite acceder a un conjunto de formularios de mantenimiento. Cada formulario de mantenimiento permite administrar un conjunto particular de datos, cada uno, mediante una barra de herramientas, permite la carga de nuevos datos, y la actualizaci\'on y eliminaci\'on de los datos cargados previamente. Los conjuntos de formularios y sus respectivos formularios de mantenimiento est\'an enumerados en la siguiente lista.
	
\begin{enumerate}
	\item Localizaci\'on
		\begin{enumerate}
			\item Detalle de cantones
			\item Detalle de distritos
			\item Localidades
			\item Direcciones Regionales
			\item Centros Educativos
			\item Matr\'icula
			\item Modalidades
			\item Tipolog\'ias
		\end{enumerate}
	\item N\'omina de centros educativos
		\begin{enumerate}
			\item Preescolar independiente
			\item I y II ciclos
			\item Colegios
			\item CNV MTS
			\item C.E.E.
			\item CAIPAD
			\item Escuelas nocturnas
			\item IPEC
			\item CINDEA
			\item CONED
		\end{enumerate}
	\item Cat\'alogo de productos
		\begin{enumerate}
			\item Categor\'ias
			\item Productos
		\end{enumerate}
	\item An\'alisis de datos
	\item Mensajer\'ia
		\begin{enumerate}
			\item Solicitudes de informaci\'on
		\end{enumerate}
	\item Sistema
		\begin{enumerate}
			\item Autorizaci\'on de perfiles
			\item Autorizaci\'on de usuarios
			\item Perfiles
			\item Perfiles por usuarios
			\item Usuarios
			\item Configuraci\'on
		\end{enumerate}
\end{enumerate}

Cada formulario de mantenimiento permitir\'a, mediante una barra de herramientas y seg\'un el perfil del usuario, la lectura, carga, actualizaci\'on y eliminaci\'on de los datos cargados previamente mediante el formulario.

\subsection{Mantenimiento de datos: Detalle de cantones}

Es recomendable, antes de desplegar el formulario de mantenimiento, en la lista desplegable bajo el men\'u administrativo, seleccionar el a\~no en el que se quiere trabajar.

El formulario de mantenimiento puede ser desplegado al seleccionar la opci\'on con la leyenda ``Detalle de cantones'' en el men\'u con la leyenda ``Localizaci\'on''. El formulario contiene la barra de herramientas que permite registrar, editar y eliminar detalles de cantones, un campo para buscar detalles de cantones, la lista de detalles de cantones para el a\~no seleccionado, y una barra de paginaci\'on. El formulario de mantenimiento luce como en la figura \ref{fig:cantonsdetail}.

\begin{figure}
	\centering
		\includegraphics[width=340px, keepaspectratio=false]{cantonsdetail}
			\caption{Formulario de mantenimiento de detalle de cantones.}
	\label{fig:cantonsdetail}
\end{figure}

La barra de herramientas, mediante (1) el bot\'on con la leyenda ``Nuevo'', permite registrar un nuevo detalle, mediante (2) el bot\'on con la leyenda ``Editar'' permite editar el detalle seleccionado en la lista, y mediante (3) el bot\'on con la leyenda ``Eliminar'' permite eliminar el o los detalles seleccionados en la lista. Un detalle puede ser seleccionado al presionar cualquiera de sus datos.

El campo de b\'usqueda permite filtrar el contenido de la lista, para esto es necesario solo digitar en el campo un texto que forme parte del detalle del cant\'on, para el a\~no seleccionado. La lista es ordenable, es posible ordenarla al presionar cualquier celda de su encabezado, la lista ser\'a ordenada ascendentemente en funci\'on de la celda presionada, y al volver a presionar la misma celda, la lista ser\'a ordenada descendentemente en funci\'on de la celda presionada. La barra de paginaci\'on permite explorar el conjunto de detalles p\'agina por p\'agina, cada p\'agina contiene diez registros de detalle, para ir a otra p\'agina es necesario solo presionar el n\'umero correspondiente en la barra. Si el n\'umero de la p\'agina de destino no es visible, se debe presionar otro m\'as cercano, as\'i hasta que el n\'umero de la p\'agina de destino sea visible. El enlace con la leyenda ``Anterior'' y el enlace con la leyenda ``Siguiente'' permiten ir a la p\'agina anterior y a la p\'agina siguiente, respectivamente.

Al presionar el bot\'on con la leyenda ``Nuevo'', aparece el formulario para el registro de un nuevo detalle. En el formulario, los campos con asterisco deben ser rellenados. Si un campo con asterisco no es rellenado o se seleccionan un cant\'on y un a\~no para los que hay registrado un detalle, el navegador no permitir\'a la edici\'on, informar\'a lo sucedido y permitir\'a volver a intentar. En caso contrario, el navegador informar\'a que la edici\'on fue exitosa. El formulario de registro luce como en la figura \ref{fig:cantonsdetailnew}.
 
\begin{figure}
	\centering
		\includegraphics[width=340px, keepaspectratio=false]{cantonsdetailnew}
			\caption{Formulario de registro de detalle de cantones.}
	\label{fig:cantonsdetailnew}
\end{figure}

Al presionar el bot\'on con la leyenda ``Editar'', si hay un detalle seleccionado, aparece el formulario para la edici\'on del detalle. En el formulario, los campos con asterisco deben ser rellenados. Si un campo con asterisco no es rellenado o se seleccionan un cant\'on y un a\~no para los que hay registrado un detalle, el navegador no permitir\'a el registro, informar\'a lo sucedido y permitir\'a volver a intentar. En caso contrario, el navegador informar\'a que el registro fue exitoso. El formulario de edici\'on luce como en la figura \ref{fig:cantonsdetailedit}.

\begin{figure}
	\centering
		\includegraphics[width=340px, keepaspectratio=false]{cantonsdetailedit}
			\caption{Formulario de edici\'on de detalle de cantones.}
	\label{fig:cantonsdetailedit}
\end{figure}

Al presionar el bot\'on con la leyenda ``Eliminar'', el sistema eliminar\'a el o los detalles seleccionados. Si no hay detalles seleccionados, el navegador no permitir\'a la eliminaci\'on, informar\'a lo sucedido y permitir\'a volver a intentar. En caso contrario, el navegador informar\'a que la eliminaci\'on fue exitosa.

{% for crud in cruds %}
{% for subsection in crud["_controllers"] %}
\subsection{{ "{Mantenimiento de datos: "~subsection["_name"]~"}" }}

{% if subsection["_ageclustered"] %}
Es recomendable, antes de desplegar el formulario de mantenimiento, en la lista desplegable bajo el men\'u administrativo, seleccionar el a\~no en el que se quiere trabajar.
{% endif %}

El formulario de mantenimiento puede ser desplegado al seleccionar la opci\'on con la leyenda ``{{ subsection["_name"] }}'' en el men\'u con la leyenda ``{{ crud["_module"] }}''. El formulario contiene {% if subsection["_actions"] != "" %}la barra de herramientas que permite {{ subsection["_actions"] }} {{ subsection["_pluralnoun"] }}, {% endif %}un campo para buscar {{ subsection["_pluralnoun"] }}, la lista de {{ subsection["_pluralnoun"] }}{% if subsection["_ageclustered"] %} para el a\~no seleccionado{% endif %}, y una barra de paginaci\'on. El formulario de mantenimiento luce como en la figura \ref{fig:{{ subsection["_id"] }}}.

\begin{figure}
	\centering
		\fbox{
			\includegraphics[width=330px, keepaspectratio=false]{{ "{"~subsection["_id"]~"}" }}
		}
		\caption{Formulario de mantenimiento de {{ subsection["_pluralnoun"] }}}
	\label{fig:{{ subsection["_id"] }}}
\end{figure}

{% if subsection["_actions"] != "" %}
La barra de herramientas, mediante (1) el bot\'on con la leyenda ``Nuevo'', permite registrar {{ subsection["_word_a"] }} {{ subsection["_word_new"] }} {{ subsection["_shortnoun"] }}, mediante (2) el bot\'on con la leyenda ` Editar'' permite editar {{ subsection["_word_the"] }} {{ subsection["_shortnoun"] }} seleccionado en la lista, y mediante (3) el bot\'on con la leyenda ``Eliminar'' permite eliminar {{ subsection["_word_pluralthe"] }} {{ subsection["_pluralshortnoun"] }} {{ subsection["_word_pluralselected"] }} en la lista. {{ subsection["_word_A"] }} {{ subsection["_shortnoun"] }} puede ser {{ subsection["_word_selected"] }} al presionar cualquiera de sus datos.
{% endif %}

\paragraph{B\'usqueda de {{ subsection["_pluralnoun"] }}.}

El campo de b\'usqueda permite filtrar el contenido de la lista, para esto es necesario solo digitar en el campo un texto que forme parte de {{ subsection["_word_the"] }} {{ subsection["_shortnoun"] }}, para el a\~no seleccionado. La lista es ordenable, es posible ordenarla al presionar cualquier celda de su encabezado, la lista ser\'a ordenada ascendentemente en funci\'on de la celda presionada, y al volver a presionar la misma celda, la lista ser\'a ordenada descendentemente en funci\'on de la celda presionada. La barra de paginaci\'on permite explorar el conjunto de {{ subsection["_pluralshortnoun"] }} p\'agina por p\'agina, cada p\'agina contiene diez registros de {{ subsection["_shortnoun"] }}, para ir a otra p\'agina es necesario solo presionar el n\'umero correspondiente en la barra. Si el n\'umero de la p\'agina de destino no es visible, se debe presionar otro m\'as cercano, as\'i hasta que el n\'umero de la p\'agina de destino sea visible. El enlace con la leyenda ``Anterior'' y el enlace con la leyenda ``Siguiente'' permiten ir a la p\'agina anterior y a la p\'agina siguiente, respectivamente.

{% if subsection["_actions"] != "" %}
\paragraph{Registro de {{ subsection["_pluralnoun"] }}.}

Al presionar el bot\'on con la leyenda ``Nuevo'', aparece el formulario para el registro de {{ subsection["_word_a"] }} {{ subsection["_word_new"] }} {{ subsection["_shortnoun"] }}. En el formulario, los campos con asterisco deben ser rellenados. Si un campo con asterisco no es rellenado o se selecciona {{ subsection["_unique"] }} para los que hay {{ subsection["_word_stored"] }} {{ subsection["_word_a"] }} {{ subsection["_shortnoun"] }}, el navegador no permitir\'a el registro, informar\'a lo sucedido y permitir\'a volver a intentar. En caso contrario, el navegador informar\'a que el registro fue exitoso. El formulario de registro luce como en la figura \ref{fig:{{ subsection["_id"] }}new}.

\begin{figure}
	\centering
		\fbox{
			\includegraphics[width=330px, keepaspectratio=false]{{ "{"~subsection["_id"]~"new}" }}
		}
		\caption{Formulario de registro de {{ subsection["_pluralnoun"] }}}
	\label{fig:{{ subsection["_id"] }}new}
\end{figure}

\paragraph{Edici\'on de {{ subsection["_pluralnoun"] }}.}

Al presionar el bot\'on con la leyenda ``Editar'', si hay {{ subsection["_word_a"] }} {{ subsection["_shortnoun"] }} {{ subsection["_word_selected"] }}, aparece el formulario para la edici\'on de {{ subsection["_word_the"] }} {{ subsection["_shortnoun"] }}. En el formulario, los campos con asterisco deben ser rellenados. Si un campo con asterisco no es rellenado, el navegador no permitir\'a la edici\'on, informar\'a lo sucedido y permitir\'a volver a intentar. En caso contrario, el navegador informar\'a que la edici\'on fue exitosa. El formulario de edici\'on luce como en la figura \ref{fig:{{ subsection["_id"] }}edit}.

\begin{figure}
	\centering
		\fbox{
			\includegraphics[width=330px, keepaspectratio=false]{{ "{"~subsection["_id"]~"edit}" }}
		}
		\caption{Formulario de edici\'on de {{ subsection["_pluralnoun"] }}}
	\label{fig:{{ subsection["_id"] }}edit}
\end{figure}

\paragraph{Eliminaci\'on de {{ subsection["_pluralnoun"] }}.}

Al presionar el bot\'on con la leyenda ``Eliminar'', el sistema eliminar\'a {{ subsection["_word_pluralthe"] }} {{ subsection["_pluralshortnoun"] }} {{ subsection["_word_pluralselected"] }}. Si no hay {{ subsection["_pluralshortnoun"] }} {{ subsection["_word_pluralselected"] }}, el navegador no permitir\'a la eliminaci\'on, informar\'a lo sucedido y permitir\'a volver a intentar. En caso contrario, el navegador informar\'a que la eliminaci\'on fue exitosa.
{% endif %}

{% endfor %}
{% endfor %}
% --------------------------------------------------------------------------------------------------------------------------------
%bibliographystyle{IEEEtran}
%bibliography{refs}

% --------------------------------------------------------------------------------------------------------------------------------
\end{document}
