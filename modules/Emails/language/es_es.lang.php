<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
* The contents of this file are subject to the SugarCRM Public License Version
 * 1.1.3 ("License"); You may not use this file except in compliance with the
 * License. You may obtain a copy of the License at http://www.sugarcrm.com/SPL
 * Software distributed under the License is distributed on an "AS IS" basis,
 * WITHOUT WARRANTY OF ANY KIND, either express or implied.  See the License
 * for the specific language governing rights and limitations under the
 * License.
 *
 * All copies of the Covered Code must include on each user interface screen:
 *    (i) the "Powered by SugarCRM" logo and
 *    (ii) the SugarCRM copyright notice
 * in the same form as they appear in the distribution.  See full license for
 * requirements.
 *
 * The Original Code is: SugarCRM Open Source
 * The Initial Developer of the Original Code is SugarCRM, Inc.
 * Portions created by SugarCRM are Copyright (C) 2004-2006 SugarCRM, Inc.;
 * All Rights Reserved.
 * Contributor(s): ______________________________________.
 ********************************************************************************/

/*********************************************************************************
 * Description:  Defines the English language pack for the base application.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

$mod_strings= array (
'LBL_FW'                                           => 'RV:',
'LBL_RE'                                           => 'RE:',
'LBL_BUTTON_CREATE'                                => 'Crear',
'LBL_BUTTON_EDIT'                                  => 'Editar',
'LBL_QS_DISABLED'                                  => '(La Búsqueda Rápida no está disponible para este módulo. Por favor, use el botón de selección.)',
'LBL_SIGNATURE_PREPEND'                            => 'Firma sobre la respuesta',
'LBL_EMAIL_DEFAULT_DESCRIPTION'                    => 'Este es el presupuesto que solicitó (Puede cambiar el texto)',
'LBL_EMAIL_QUOTE_FOR'                              => 'Presupuesto para: ',
'LBL_QUOTE_LAYOUT_DOES_NOT_EXIST_ERROR'            => 'el archivo de diseño del presupuesto no existe: $layout',
'LBL_QUOTE_LAYOUT_REGISTERED_ERROR'                => 'el diseño del presupuesto no está registrado en modules/Quotes/Layouts.php',
'LBL_CONFIRM_DELETE'                               => '¿Está seguro de que desea eliminar esta carpeta?',
'LBL_ENTER_FOLDER_NAME'                            => 'Por favor, introduzca un nombre de carpeta',
'LBL_ERROR_SELECT_MODULE'                          => 'Por favor, seleccione un módulo para el campo Relacionado con',
'ERR_ARCHIVE_EMAIL'                                => 'Error: Seleccione los emails a archivar.',
'ERR_DATE_START'                                   => 'Fecha de inicio',
'ERR_DELETE_RECORD'                                => 'Error: Debe especificar un número de registro para eliminar la cuenta.',
'ERR_NOT_ADDRESSED'                                => 'Error: El Email debe tener una dirección Para, CC o CCO',
'ERR_TIME_START'                                   => 'Hora de inicio',
'ERR_TIME_SENT'                                    => 'Hora de envío',
'LBL_ACCOUNTS_SUBPANEL_TITLE'                      => 'Cuentas',
'LBL_ADD_ANOTHER_FILE'                             => 'Añadir Otro Archivo',
'LBL_ADD_DASHLETS'                                 => 'Agregar Sugar Dashlets',
'LBL_ADD_DOCUMENT'                                 => 'Agregar Documentos',
'LBL_ADD_ENTRIES'                                  => 'Agregar Entradas',
'LBL_ADD_FILE'                                     => 'Agregar Archivos',
'LBL_ARCHIVED_EMAIL'                               => 'Email Archivado',
'LBL_ARCHIVED_MODULE_NAME'                         => 'Crear Emails Archivados',
'LBL_ARCHIVED_EMAILS_CREATE'                       => 'Crear',
'LBL_ATTACHMENTS'                                  => 'Adjuntos:',
'LBL_HAS_ATTACHMENT'                               => '¿Tiene Adjunto?:',
'LBL_BCC'                                          => 'CCO:',
'LBL_BODY'                                         => 'Cuerpo:',
'LBL_BUGS_SUBPANEL_TITLE'                          => 'Incidencias',
'LBL_CC'                                           => 'CC:',
'LBL_COLON'                                        => ':',
'LBL_COMPOSE_MODULE_NAME'                          => 'Redactar Email',
'LBL_CONTACT_FIRST_NAME'                           => 'Nombre del Contacto',
'LBL_CONTACT_LAST_NAME'                            => 'Apellido del Contacto',
'LBL_CONTACT_NAME'                                 => 'Contacto:',
'LBL_CONTACTS_SUBPANEL_TITLE'                      => 'Contactos',
'LBL_CREATED_BY'                                   => 'Creado por',
'LBL_DATE_AND_TIME'                                => 'Fecha y hora envío:',
'LBL_DATE_SENT'                                    => 'Fecha Envío:',
'LBL_DATE'                                         => 'Fecha envío:',
'LBL_DELETE_FROM_SERVER'                           => 'Eliminar mensaje del servidor',
'LBL_DESCRIPTION'                                  => 'Descripción',
'LBL_EDIT_ALT_TEXT'                                => 'Editar Texto Plano',
'LBL_SEND_IN_PLAIN_TEXT'                           => 'Enviar en Texto Plano',
'LBL_EDIT_MY_SETTINGS'                             => 'Editar Mi Configuración',
'LBL_EMAIL_ATTACHMENT'                             => 'Archivo Adjunto',
'LBL_EMAIL_EDITOR_OPTION'                          => 'Enviar correo HTML',
'LBL_EMAIL_SELECTOR_SELECT'                        => 'Selecionar',
'LBL_EMAIL_SELECTOR_CLEAR'                         => 'Limpiar',
'LBL_EMAIL'                                        => 'Correo electrónico:',
'LBL_EMAILS_ACCOUNTS_REL'                          => 'Emails:Cuentas',
'LBL_EMAILS_BUGS_REL'                              => 'Emails:Incidencias',
'LBL_EMAILS_CASES_REL'                             => 'Emails:Casos',
'LBL_EMAILS_CONTACTS_REL'                          => 'Emails:Contactos',
'LBL_EMAILS_LEADS_REL'                             => 'Emails:Clientes Potenciales',
'LBL_EMAILS_OPPORTUNITIES_REL'                     => 'Emails:Oportunidades',
'LBL_EMAILS_NOTES_REL'                             => 'Emails:Notas',
'LBL_EMAILS_PROJECT_REL'                           => 'Emails:Proyecto',
'LBL_EMAILS_PROJECT_TASK_REL'                      => 'Emails:Tareas de proyecto',
'LBL_EMAILS_PROSPECT_REL'                          => 'Emails:Público objetivo',
'LBL_EMAILS_TASKS_REL'                             => 'Emails:Tareas',
'LBL_EMAILS_USERS_REL'                             => 'Emails:Usuarios',
'LBL_EMPTY_FOLDER'                                 => 'No hay emails a mostrar',
'LBL_ERROR_SENDING_EMAIL'                          => 'Error enviando email',
'LBL_ERROR_SAVING_DRAFT'                           => 'Error Guardando Borrador',
'LBL_FORWARD_HEADER'                               => 'Inicio de mensaje reenviado:',
'LBL_FROM_NAME'                                    => 'Nombre Remitente',
'LBL_FROM'                                         => 'De:',
'LBL_REPLY_TO'                                     => 'Responder A:',
'LBL_HTML_BODY'                                    => 'Cuerpo de HTML',
'LBL_INVITEE'                                      => 'Destinatarios',
'LBL_LEADS_SUBPANEL_TITLE'                         => 'Clientes Potenciales',
'LBL_MESSAGE_SENT'                                 => 'Mensaje Enviado',
'LBL_MODIFIED_BY'                                  => 'Modificado Por',
'LBL_MODULE_NAME_NEW'                              => 'Archivar Email',
'LBL_MODULE_NAME'                                  => 'Todos los Emails',
'LBL_MODULE_TITLE'                                 => 'Emails: Inicio',
'LBL_MY_EMAILS'                                    => 'Mis Emails',
'LBL_NEW_FORM_TITLE'                               => 'Guardar Email',
'LBL_NONE'                                         => 'Ninguno',
'LBL_NOT_SENT'                                     => 'Error de Envío',
'LBL_NOTE_SEMICOLON'                               => 'Nota: Utilice una coma o un punto y coma como separadores de múltiples direcciones de email.',
'LBL_NOTES_SUBPANEL_TITLE'                         => 'Datos Adjuntos',
'LBL_OPPORTUNITY_SUBPANEL_TITLE'                   => 'Oportunidades',
'LBL_PROJECT_SUBPANEL_TITLE'                       => 'Proyectos',
'LBL_PROJECT_TASK_SUBPANEL_TITLE'                  => 'Tareas de Proyecto',
'LBL_RAW'                                          => 'Código fuente del email',
'LBL_SAVE_AS_DRAFT_BUTTON_KEY'                     => 'R',
'LBL_SAVE_AS_DRAFT_BUTTON_LABEL'                   => 'Guardar Borrador',
'LBL_SAVE_AS_DRAFT_BUTTON_TITLE'                   => 'Guardar Borrador [Alt+R]',
'LBL_SEARCH_FORM_DRAFTS_TITLE'                     => 'Buscar Borradores',
'LBL_SEARCH_FORM_SENT_TITLE'                       => 'Buscar Emails Enviados',
'LBL_SEARCH_FORM_TITLE'                            => 'Búsqueda de Emails',
'LBL_SEND_ANYWAYS'                                 => 'Este correo no tiene asunto. ¿Enviar/guardar de todas formas?',
'LBL_SEND_BUTTON_KEY'                              => 'S',
'LBL_SEND_BUTTON_LABEL'                            => 'Enviar',
'LBL_SEND_BUTTON_TITLE'                            => 'Enviar [Alt+S]',
'LBL_SEND'                                         => 'ENVIAR',
'LBL_SENT_MODULE_NAME'                             => 'Emails Enviados',
'LBL_SHOW_ALT_TEXT'                                => 'Mostrar Texto Plano',
'LBL_SIGNATURE'                                    => 'Firma',
'LBL_SUBJECT'                                      => 'Asunto:',
'LBL_TEXT_BODY'                                    => 'Cuerpo de Texto',
'LBL_TIME'                                         => 'Hora envío:',
'LBL_TO_ADDRS'                                     => 'Para',
'LBL_USE_TEMPLATE'                                 => 'Usar Plantilla:',
'LBL_USERS_SUBPANEL_TITLE'                         => 'Usuarios',
'LBL_USERS'                                        => 'Usuarios',
'LNK_ALL_EMAIL_LIST'                               => 'Todos los Emails',
'LNK_ARCHIVED_EMAIL_LIST'                          => 'Emails Archivados',
'LNK_CALL_LIST'                                    => 'Llamadas',
'LNK_DRAFTS_EMAIL_LIST'                            => 'Borradores',
'LNK_EMAIL_LIST'                                   => 'Emails',
'LBL_EMAIL_RELATE'                                 => 'Relacionado con',
'LNK_EMAIL_TEMPLATE_LIST'                          => 'Ver Plantillas de Email',
'LNK_MEETING_LIST'                                 => 'Reuniones',
'LNK_NEW_ARCHIVE_EMAIL'                            => 'Crear Email Archivado',
'LNK_NEW_CALL'                                     => 'Registrar Llamada',
'LNK_NEW_EMAIL_TEMPLATE'                           => 'Crear Plantilla de Email',
'LNK_NEW_EMAIL'                                    => 'Enviar Email',
'LNK_NEW_MEETING'                                  => 'Programar Reunión',
'LNK_NEW_NOTE'                                     => 'Nueva Nota o Archivo Adjunto',
'LNK_NEW_SEND_EMAIL'                               => 'Redactar',
'LNK_NEW_TASK'                                     => 'Nueva Tarea',
'LNK_NOTE_LIST'                                    => 'Notas',
'LNK_SENT_EMAIL_LIST'                              => 'Emails Enviados',
'LNK_TASK_LIST'                                    => 'Tareas',
'LNK_VIEW_CALENDAR'                                => 'Hoy',
'LBL_LIST_ASSIGNED'                                => 'Asignado',
'LBL_LIST_CONTACT_NAME'                            => 'Nombre Contacto',
'LBL_LIST_CREATED'                                 => 'Creado',
'LBL_LIST_DATE_SENT'                               => 'Fecha Envío',
'LBL_LIST_DATE'                                    => 'Fecha Envío',
'LBL_LIST_FORM_DRAFTS_TITLE'                       => 'Borrador',
'LBL_LIST_FORM_SENT_TITLE'                         => 'Emails Enviados',
'LBL_LIST_FORM_TITLE'                              => 'Lista de Emails',
'LBL_LIST_FROM_ADDR'                               => 'De',
'LBL_LIST_RELATED_TO'                              => 'Tipo de Destinatario',
'LBL_LIST_SUBJECT'                                 => 'Asunto',
'LBL_LIST_TIME'                                    => 'Hora Envío',
'LBL_LIST_TO_ADDR'                                 => 'Para',
'LBL_LIST_TYPE'                                    => 'Tipo',
'NTC_REMOVE_INVITEE'                               => '¿Está seguro de que desea eliminar este destinatario del email?',
'WARNING_SETTINGS_NOT_CONF'                        => 'Advertencia: Su configuración de correo no está preparada para el envío de correo.',
'WARNING_NO_UPLOAD_DIR'                            => 'Los adjuntos podrían no funcionar: No se ha dado un valor a la variable de configuración "upload_tmp_dir".  Por favor, corrija esto en su archivo php.ini.',
'WARNING_UPLOAD_DIR_NOT_WRITABLE'                  => 'Los adjuntos podrían no funcionar: Se ha dado un valor incorrecto o no utilizable a la variable de configuración "upload_tmp_dir".  Por favor, corrija esto en su archivo php.ini.',
'LBL_BUTTON_RAW_TITLE'                             => 'Mostrar Código Fuente del Mensaje [Alt+E]',
'LBL_BUTTON_RAW_KEY'                               => 'e',
'LBL_BUTTON_RAW_LABEL'                             => 'Mostrar Código Fuente',
'LBL_BUTTON_RAW_LABEL_HIDE'                        => 'Ocultar Código Fuente',
'LBL_BUTTON_CHECK'                                 => 'Comprobar Correo',
'LBL_BUTTON_CHECK_TITLE'                           => 'Comprobar Correo Nuevo [Alt+C]',
'LBL_BUTTON_CHECK_KEY'                             => 'c',
'LBL_BUTTON_FORWARD'                               => 'Reenviar',
'LBL_BUTTON_FORWARD_TITLE'                         => 'Reenviar este Correo [Alt+F]',
'LBL_BUTTON_FORWARD_KEY'                           => 'f',
'LBL_BUTTON_REPLY_KEY'                             => 'r',
'LBL_BUTTON_REPLY_TITLE'                           => 'Responder [Alt+R]',
'LBL_BUTTON_REPLY'                                 => 'Responder',
'LBL_CASES_SUBPANEL_TITLE'                         => 'Casos',
'LBL_INBOUND_TITLE'                                => 'Correo Entrante',
'LBL_INTENT'                                       => 'Intento',
'LBL_MESSAGE_ID'                                   => 'ID Mensaje',
'LBL_REPLY_HEADER_1'                               => 'El ',
'LBL_REPLY_HEADER_2'                               => 'escribió:',
'LBL_REPLY_TO_ADDRESS'                             => 'Dirección de Responder A',
'LBL_REPLY_TO_NAME'                                => 'Nombre de Responder A',
'LBL_LIST_BUG'                                     => 'Incidencias',
'LBL_LIST_CASE'                                    => 'Casos',
'LBL_LIST_CONTACT'                                 => 'Contactos',
'LBL_LIST_LEAD'                                    => 'Clientes Potenciales',
'LBL_LIST_TASK'                                    => 'Tareas',
'LBL_LIST_ASSIGNED_TO_NAME'                        => 'Usuario Asignado',
'LBL_ALL'                                          => 'Todo',
'LBL_ASSIGN_WARN'                                  => 'Asegúrese de que las dos opciones están seleccionadas.',
'LBL_BACK_TO_GROUP'                                => 'Volver a Bandeja de Entrada de Grupo',
'LBL_BUTTON_DISTRIBUTE_KEY'                        => 'a',
'LBL_BUTTON_DISTRIBUTE_TITLE'                      => 'Asignar [Alt+A]',
'LBL_BUTTON_DISTRIBUTE'                            => 'Asignar',
'LBL_BUTTON_GRAB_KEY'                              => 't',
'LBL_BUTTON_GRAB_TITLE'                            => 'Tomar del Grupo [Alt+T]',
'LBL_BUTTON_GRAB'                                  => 'Tomar del Grupo',
'LBL_CREATE_BUG'                                   => 'Nueva Incidencia',
'LBL_CREATE_CASE'                                  => 'Nuevo Caso',
'LBL_CREATE_CONTACT'                               => 'Nuevo Contacto',
'LBL_CREATE_LEAD'                                  => 'Nuevo Cliente Potencial',
'LBL_CREATE_TASK'                                  => 'Nueva Tarea',
'LBL_DIST_TITLE'                                   => 'Asignación',
'LBL_LOCK_FAIL_DESC'                               => 'El elemento elegido no está disponible actualmente.',
'LBL_LOCK_FAIL_USER'                               => ' ha tomado posesión.',
'LBL_MASS_DELETE_ERROR'                            => 'No se ha seleccionado ningún elemento para su borrado.',
'LBL_NEW'                                          => 'Nuevo',
'LBL_NEXT_EMAIL'                                   => 'Siguiente Elemento Libre',
'LBL_NO_GRAB_DESC'                                 => 'No hay elementos disponibles. Inténtelo más tarde.',
'LBL_QUICK_REPLY'                                  => 'Responder',
'LBL_REPLIED'                                      => 'Respondido',
'LBL_SELECT_TEAM'                                  => 'Seleccionar Equipos',
'LBL_TAKE_ONE_TITLE'                               => 'Reps',
'LBL_TITLE_SEARCH_RESULTS'                         => 'Resultados de la Búsqueda',
'LBL_TO'                                           => 'Para:',
'LBL_TOGGLE_ALL'                                   => 'Cambiar Todo',
'LBL_UNKNOWN'                                      => 'Desconocido',
'LBL_UNREAD_HOME'                                  => 'Emails no leídos',
'LBL_UNREAD'                                       => 'No leído',
'LBL_USE_ALL'                                      => 'Todos los Resultados de Búsqueda',
'LBL_USE_CHECKED'                                  => 'Sólo Marcados',
'LBL_USE_MAILBOX_INFO'                             => 'Usar dirección De: del buzón',
'LBL_USE'                                          => 'Asignar:',
'LBL_ASSIGN_SELECTED_RESULTS_TO'                   => 'Asignar Resultados Seleccionados a:',
'LBL_USER_SELECT'                                  => 'Seleccionar Usuarios',
'LBL_USING_RULES'                                  => 'Usando Reglas:',
'LBL_WARN_NO_DIST'                                 => 'No se ha seleccionado el método de distribución',
'LBL_WARN_NO_USERS'                                => 'No se han seleccionado usuarios',
'LBL_WARN_NO_USERS_OR_TEAM'                        => 'Por favor, seleccione un usuario o equipo para su asignación.',
'LBL_IMPORT_STATUS_TITLE'                          => 'Estado',
'LBL_LIST_STATUS'                                  => 'Estado',
'LBL_LIST_TITLE_GROUP_INBOX'                       => 'Bandeja de Entrada de Grupo',
'LBL_LIST_TITLE_MY_DRAFTS'                         => 'Borradores',
'LBL_LIST_TITLE_MY_INBOX'                          => 'Bandeja de Entrada',
'LBL_LIST_TITLE_MY_SENT'                           => 'Elementos Enviados',
'LBL_LIST_TITLE_MY_ARCHIVES'                       => 'Mis Emails Archivados',
'LBL_ACTIVITIES_REPORTS'                           => 'Informe de Actividad',
'LNK_CHECK_MY_INBOX'                               => 'Comprobar Mi Correo',
'LNK_DATE_SENT'                                    => 'Fecha de Envío',
'LNK_GROUP_INBOX'                                  => 'Bandeja de Entrada de Grupo',
'LNK_MY_DRAFTS'                                    => 'Borradores',
'LNK_MY_INBOX'                                     => 'Mi Correo',
'LNK_VIEW_MY_INBOX'                                => 'Ver Mi Correo',
'LNK_QUICK_REPLY'                                  => 'Responder',
'LNK_MY_ARCHIVED_LIST'                             => 'Mis Archivos',
'LBL_EMAILS_NO_PRIMARY_TEAM_SPECIFIED'             => 'No se ha especificado un Equipo Principal',
'LBL_ASSIGNED_TO'                                  => 'Asignado A:',
'LBL_MEMBER_OF'                                    => 'Padre',
'LBL_QUICK_CREATE'                                 => 'Creación Rápida',
'LBL_STATUS'                                       => 'Estado de Email:',
'LBL_EMAIL_FLAGGED'                                => 'Etiquetado:',
'LBL_EMAIL_REPLY_TO_STATUS'                        => 'Estado de Responder A:',
'LBL_TYPE'                                         => 'Tipo:',
'LBL_EMAILTEMPLATE_MESSAGE_SHOW_TITLE'             => '¡Por favor, compruebe los siguiente!',
'LBL_EMAILTEMPLATE_MESSAGE_SHOW_MSG'               => 'Al seleccionar esta plantilla el cuerpo del correo ya introducido será reemplazado. ¿Desea continuar?',
'LBL_EMAILTEMPLATE_MESSAGE_CLEAR_MSG'              => 'Al seleccionar "--Ninguno--" se limpiará cualquier información ya introducida en el cuerpo del correo. ¿Desea continuar?',
'LBL_EMAILTEMPLATE_MESSAGE_WARNING_TITLE'          => 'Advertencia',
'LBL_EMAILTEMPLATE_MESSAGE_MULTIPLE_RECIPIENTS'    => 'Con una plantilla de correo electrónico que contiene las variables de contacto, como el nombre del contacto, enviar correos electrónicos a varios destinatarios puede tener resultados inesperados. Se recomienda que utilice una campaña de correo electrónico para los envíos masivos.',
'LBL_CHECK_ATTACHMENTS'                            => 'Por favor, compruebe los archivos adjuntos.',
'LBL_HAS_ATTACHMENTS'                              => 'Este email ya tiene archivos adjuntos. ¿Desea preservarlos?',
'ERR_MISSING_REQUIRED_FIELDS'                      => 'Falta campo requerido',
'ERR_INVALID_REQUIRED_FIELDS'                      => 'Campo requerido no válido',
'LBL_FILTER_BY_RELATED_BEAN'                       => 'Sólo mostrar destinatarios relacionados',
'LBL_RECIPIENTS_HAVE_BEEN_ADDED'                   => 'Se han añadido los destinatarios.',
'LBL_ADD_INBOUND_ACCOUNT'                          => 'Añadir',
'LBL_ADD_OUTBOUND_ACCOUNT'                         => 'Añadir',
'LBL_EMAIL_ACCOUNTS_INBOUND'                       => 'Propiedades de Cuenta de Correo',
'LBL_EMAIL_SETTINGS_OUTBOUND_ACCOUNT'              => 'Servidor de Correo Saliente SMTP',
'LBL_EMAIL_SETTINGS_OUTBOUND_ACCOUNTS'             => 'Servidores de Correo Saliente SMTP',
'LBL_EMAIL_SETTINGS_INBOUND_ACCOUNTS'              => 'Cuentas de Correo',
'LBL_EMAIL_SETTINGS_INBOUND'                       => 'Correo Entrante',
'LBL_EMAIL_SETTINGS_OUTBOUND'                      => 'Correo Saliente',
'LBL_ADD_CC'                                       => 'Añadir Cc',
'LBL_ADD_BCC'                                      => 'Añadir Cco',
'LBL_ADD_TO_ADDR'                                  => 'Añadir Para',
'LBL_SELECTED_ADDR'                                => 'Seleccionado',
'LBL_ADD_CC_BCC_SEP'                               => '|',
'LBL_SEND_EMAIL_FAIL_TITLE'                        => 'Error Enviando Correo',
'LBL_EMAIL_DETAIL_VIEW_SHOW'                       => 'mostrar ',
'LBL_EMAIL_DETAIL_VIEW_MORE'                       => ' más',
'LBL_MORE_OPTIONS'                                 => 'Más',
'LBL_LESS_OPTIONS'                                 => 'Menos',
'LBL_MAILBOX_TYPE_PERSONAL'                        => 'Personal',
'LBL_MAILBOX_TYPE_GROUP'                           => 'Grupo',
'LBL_MAILBOX_TYPE_GROUP_FOLDER'                    => 'Grupo - Auto-Importación',
'LBL_SEARCH_FOR'                                   => 'Buscar',
'LBL_EMAIL_INBOUND_TYPE_HELP'                      => '<b>Personal</b>: Cuenta de correo accesible por usted. Sólo usted puede administrar e importar correos desde esta cuenta.<br><b>Grupo</b>: Cuenta de correo accesible por miembros de equipos específicos. Los miembros de equipos pueden administrar e importar correos de esta cuenta.<br><b>Grupo - auto-importación</b>: Cuenta de correo accesible por miembros de equipos específicos. Los correos son importados como registros de forma automática.',
'LBL_ADDRESS_BOOK_SEARCH_HELP'                     => 'Introduzca una dirección de correo, Nombre, Apellido o Nombre de Cuenta para encontrar destinatarios.',
'LBL_TEST_SETTINGS'                                => 'Probar Configuración',
'LBL_EMPTY_EMAIL_BODY'                             => '<p><span style="color: #888888;"><em>Este Mensaje No Tiene Contenido</em></span></p>',
'LBL_TEST_EMAIL_SUBJECT'                           => 'Correo de Prueba desde Sugar',
'LBL_NO_SUBJECT'                                   => '(sin asunto)',
'LBL_CHECKING_ACCOUNT'                             => 'Comprobando Cuenta',
'LBL_OF'                                           => 'de',
'LBL_TEST_EMAIL_BODY'                              => 'Este correo se ha enviado para comprobar la información sobre el servidor de correo saliente proporcionada en la aplicación Sugar.  La recepción con éxito de este correo confirma que la información proporcionada acerca del servidor de correo saliente es válida.',
'LBL_MAIL_SMTPUSER'                                => 'Nombre de usuario SMTP:',
'LBL_MAIL_SMTPPASS'                                => 'Contraseña SMTP:',
'LBL_MAIL_SMTPSERVER'                              => 'Servidor SMTP:',
'LBL_SMTP_SERVER_HELP'                             => 'Este Servidor de Correo SMTP puede utilizarse para correo saliente. Proporcione el nombre de usuario y la contraseña de su cuenta de correo para usar el servidor de correo.',
'LBL_MISSING_DEFAULT_OUTBOUND_SMTP_SETTINGS'       => 'El administrador aún no ha configurado la cuenta saliente por defecto.  No es posible enviar un correo de prueba.',
'LBL_MAIL_SMTPAUTH_REQ'                            => '¿Usar autenticación SMTP?',
'LBL_MAIL_SMTPPORT'                                => 'Puerto SMTP:',
'LBL_MAIL_SMTPTYPE'                                => 'Tipo de Servidor SMTP:',
'LBL_MAIL_SMTP_SETTINGS'                           => 'Especificación de Servidor SMTP',
'LBL_CHOOSE_EMAIL_PROVIDER'                        => 'Elija su proveedor de Email:',
'LBL_YAHOOMAIL_SMTPPASS'                           => 'Contraseña de Yahoo! Mail:',
'LBL_YAHOOMAIL_SMTPUSER'                           => 'ID de Yahoo! Mail:',
'LBL_GMAIL_SMTPPASS'                               => 'Contraseña de Gmail:',
'LBL_GMAIL_SMTPUSER'                               => 'Dirección de Email de Gmail:',
'LBL_EXCHANGE_SMTPPASS'                            => 'Contraseña de Exchange:',
'LBL_EXCHANGE_SMTPUSER'                            => 'Nombre de usuario de Exchange:',
'LBL_EXCHANGE_SMTPPORT'                            => 'Puerto de Servidor Exchange:',
'LBL_EXCHANGE_SMTPSERVER'                          => 'Servidor Exchange:',
'LBL_EDIT_LAYOUT'                                  => 'Editar diseño',
'LBL_ATTACHMENT'                                   => 'Adjunto',
'LBL_DELETE_INLINE'                                => 'Eliminar',
'LBL_CREATE_CASES'                                 => 'Crear casos',
'LBL_CREATE_LEADS'                                 => 'Crear guías',
'LBL_CREATE_CONTACTS'                              => 'Crear contactos',
'LBL_CREATE_BUGS'                                  => 'Crear errores',
'LBL_CREATE_TASKS'                                 => 'Crear tareas',
'LBL_CHECK_INLINE'                                 => 'Corregir',
'LBL_CLOSE'                                        => 'Cerrar',
'LBL_HELP'                                         => 'Ayuda',
'LBL_GMAIL_LOGO'                                   => 'Gmail',
'LBL_YAHOO_MAIL'                                   => 'Yahoo',
'LBL_EXCHANGE_LOGO'                                => 'Exchange',
'LBL_WAIT'                                         => 'Espera',
'LBL_CHECKEMAIL'                                   => 'Revisar Email',
'LBL_COMPOSEEMAIL'                                 => 'Readactar Email',
'LBL_EMAILSETTINGS'                                => 'Configuración de Email',
'LBL_CONTACTS_SUBPANEL_TITLE_SNIP'                 => 'Contactos de Email',
'LBL_EMAILS_MEETINGS_REL'                          => 'Emails:Reuniones',
'LBL_DATE_CREATED'                                 => 'Fecha de creación',
'LBL_DATE_MODIFIED'                                => 'Fecha de modificación',
);?>
