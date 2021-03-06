<?php

// Heading
$_['heading_title']                                     = 'Square';
$_['heading_title_transaction']                         = 'Zobacz transakcję #%s';

// Help
$_['help_total']                                        = 'Kwota którą musi osiągnąć zamówienie aby ta metoda płatności była aktywna.';
$_['help_local_cron']                                   = 'Wstaw to polecenie do zadań CRON serwera. Ustaw uruchamianie na przynajmniej raz dziennie.';
$_['help_remote_cron']                                  = 'Użyj ten URL aby ustawić zadanie w usłudze CRON. Ustaw uruchamianie na przynajmniej raz dziennie.';
$_['help_recurring_status']                             = 'Uaktywnij aby zezwolić na okresowe płatności ratalne.<br />UWAGA: Musisz również ustawić dzienne zadanie CRON.';
$_['help_cron_email']                                   = 'Podsumowanie cyklicznego zadania będzie wysyłane na ten e-mail po zakończeniu.';
$_['help_cron_email_status']                            = 'Uaktywnij aby otrzymać podsumowanie po każdym zadaniu CRON.';
$_['help_notify_recurring_success']                     = 'Powiadamiaj klientów o udanych cyklicznych transakcjach.';
$_['help_notify_recurring_fail']                        = 'Powiadamiaj klientów o nieudanych cyklicznych transakcjach.';

// Tab
$_['tab_setting']                                       = 'Ustawienia';
$_['tab_transaction']                                   = 'Transakcje';
$_['tab_cron']                                          = 'CRON';
$_['tab_recurring']                                     = 'Płatności ratalne';

// Text
$_['text_access_token_expires_label']                   = 'Token dostępowy wygasa';
$_['text_access_token_expires_placeholder']             = 'Nieustawiony';
$_['text_acknowledge_cron']                             = 'Potwierdzam że ustawiłem automatyczne zadanie CRON wykorzystując jedną z powyższych metod.';
$_['text_admin_notifications']                          = 'Powiadomienia administratora';
$_['text_authorize_label']                              = 'Autoryzuj';
$_['text_canceled_success']                             = 'Sukces: Ta płatność została anulowana!';
$_['text_capture']                                      = 'Przechwyć';
$_['text_client_id_help']                               = 'Znajdziesz to na podstronie zarządzania aplikacją w Square';
$_['text_client_id_label']                              = 'ID aplikacji Square';
$_['text_client_id_placeholder']                        = 'ID aplikacji Square';
$_['text_client_secret_help']                           = 'Znajdziesz to na podstronie zarządzania aplikacją w Square';
$_['text_client_secret_label']                          = 'OAuth Application Secret';
$_['text_client_secret_placeholder']                    = 'OAuth Application Secret';
$_['text_confirm_action']                               = 'Czy jesteś pewien?';
$_['text_confirm_cancel']                               = 'Czy na pewno chcesz anulować płatności ratalne?';
$_['text_confirm_capture']                              = 'Zamierzasz przechwycić następującą kwotę: <strong>%s</strong>. Kliknij OK aby kontynuować.';
$_['text_confirm_refund']                               = 'Podaj przyczynę zwrotu:';
$_['text_confirm_void']                                 = 'Zamierzasz unieważnić następującą kwotę: <strong>%s</strong>. Kliknij OK aby kontynuować.';
$_['text_connected']                                    = 'Połączono';
$_['text_connected_info']                               = "Połącz się ponownie jeśli chcesz zmienić konta lub unieważniłeś ręcznie dostęp tego rozszerzenia do konsoli aplikacji Square. Odśwież ręcznie token dostępu jeśli okres od ostatniej sprzedaży lub połączenia zbliża się do 45 dni.";
$_['text_connection_section']                           = 'Połączenie Square';
$_['text_connection_success']                           = 'Połączenie udane!';
$_['text_cron_email']                                   = 'Wyślij podsumowanie na ten adres e-mail:';
$_['text_cron_email_status']                            = 'Wyślij podsumowanie e-mail:';
$_['text_customer_notifications']                       = 'Powiadomienia klienta';
$_['text_debug_disabled']                               = 'Nieaktywne'; 
$_['text_debug_enabled']                                = 'Aktywne'; 
$_['text_debug_help']                                   = 'Żądania i odpowiedzi API będą zapisywane w dzienniku błędów OpenCartlog. Używaj tego tylko do debugowania.';
$_['text_debug_label']                                  = 'Logowanie debugowania';
$_['text_delay_capture_help']                           = 'Automatycznie autoryzuj transakcje lub dokonuj obciążeń';
$_['text_delay_capture_label']                          = 'Typ transakcji';
$_['text_disabled_connect_help_text']                   = 'Id i hasło klienta są wymagane.';
$_['text_edit_heading']                                 = 'Edytuj Square';
$_['text_enable_sandbox_help']                          = 'Uaktywnij tryb sandbox do testowania transakcji';
$_['text_enable_sandbox_label']                         = 'Uaktywnij tryb sandbox do testowania transakcji';
$_['text_executables']                                  = 'Metody wykonywania CRON';
$_['text_extension']                                    = 'Rozszerzenia';
$_['text_extension_status']                             = 'Status rozszerzenia';
$_['text_extension_status_disabled']                    = 'Nieaktywne'; 
$_['text_extension_status_enabled']                     = 'Aktywne'; 
$_['text_extension_status_help']                        = 'Aktywuj lub dezaktywuj metodę płatności'; 
$_['text_insert_amount']                                = 'Podaj kwotę zwrotu. Maksimum: %s w %s:';
$_['text_loading']                                      = 'Ładowanie danych... Prosimy czekać...';
$_['text_loading_short']                                = 'Prosimy czekać...';
$_['text_local_cron']                                   = 'Metoda #1 - zadanie CRON:';
$_['text_location_error']                               = 'Wystąpił błąd podczas próby synchronizacji lokalizacji i tokenu: %s';
$_['text_location_help']                                = 'Wybierz skonfigurowaną lokalizację Square do wykorzystania dla transakcji. Musi ona mieć aktywne możliwości przetwarzania kart.';
$_['text_location_label']                               = 'Lokalizacja';
$_['text_manage']                                       = 'Transakcja karty kredytowej (Square)';
$_['text_manage_tooltip']                               = 'Zobacz szczegóły / Przechwyć / Unieważnij / Zwróć';
$_['text_merchant_info_section_heading']                = 'Dane handlowca';
$_['text_merchant_name_label']                          = 'Nazwisko handlowca';
$_['text_merchant_name_placeholder']                    = 'Nieustawiony';
$_['text_no_appropriate_locations_warning']             = 'W Twoim koncie Square nie ma ustawionych lokalizacji zdolnych do przetwarzania kart online.';
$_['text_no_location_selected_warning']                 = 'Nie ma wybranej lokalizacji.';
$_['text_no_locations_label']                           = 'Brak ważnych lokalizacji';
$_['text_no_transactions']                              = 'Żadne transakcjie nie zostały jeszcze zapisane.';
$_['text_not_connected']                                = 'Niepołączono';
$_['text_not_connected_info']                           = 'Poprzez kliknięcie tego przycisku połączysz ten moduł z Twoim kontem Square i aktywujesz usługę.';
$_['text_notification_ssl']                             = 'Upewnij się, że masz aktywny SSL na podstronie kasy. W innym przypadku rozszerzenie nie zadziała.';
$_['text_notify_recurring_fail']                        = 'Cykliczna transakcja nieudana:';
$_['text_notify_recurring_success']                     = 'Cykliczna transakcja udana:';
$_['text_ok']                                           = 'OK';
$_['text_order_history_cancel']                         = 'Administrator anulował Twoje płatności ratalne. Twoja karta nie będzie już obciążana.';
$_['text_payment_method_name_help']                     = 'Nazwa metody płatności kasy';
$_['text_payment_method_name_label']                    = 'Nazwa metody płatności';
$_['text_payment_method_name_placeholder']              = 'Karta kredytowa / debetowa';
$_['text_recurring_info']                               = 'Upewnij się aby ustawić dzienne zadanie CRON używając jednej z poniższych metod. Zadania CRON pomagają w:<br /><br />&bull; automatycznym odświeżaniu Twojego tokenu dostępowego do API<br />&bull; przetwarzaniu cyklicznych transakcji';
$_['text_recurring_status']                             = 'Status płatności cyklicznych:';
$_['text_redirect_uri_help']                            = 'Wklej ten link w polu Redirect URI w Manage Application/oAuth';
$_['text_redirect_uri_label']                           = 'Square OAuth Redirect URL';
$_['text_refresh_access_token_success']                 = 'Połączenie z Twoim kontem Square zostało odświeżone.'; 
$_['text_refresh_token']                                = 'Odnów token';
$_['text_refund']                                       = 'Zwrot';
$_['text_refund_details']                               = 'Dane zwrotu';
$_['text_refunded_amount']                              = 'Zwrócono: %s. Status zwrotu: %s. Przyczyna zwrotu: %s';
$_['text_refunds']                                      = 'Zwroty (%s)';
$_['text_remote_cron']                                  = 'Metoda #2 - zdalny CRON:';
$_['text_sale_label']                                   = 'Sprzedaż';
$_['text_sandbox_access_token_help']                    = 'Znajdziesz to na podstronie zarządzania aplikacją w Square';
$_['text_sandbox_access_token_label']                   = 'Token dostępowy Sandbox';
$_['text_sandbox_access_token_placeholder']             = 'Token dostępowy Sandbox';
$_['text_sandbox_client_id_help']                       = 'Znajdziesz to na podstronie zarządzania aplikacją w Square';
$_['text_sandbox_client_id_label']                      = 'ID aplikacji Sandbox';
$_['text_sandbox_client_id_placeholder']                = 'ID aplikacji Sandbox';
$_['text_sandbox_disabled_label']                       = 'Nieaktywny'; 
$_['text_sandbox_enabled']                              = 'Tryb Sandbox jest aktywny! Transakcje będą figurowały jako udane, ale nie będą przeprowadzone żadne obciążenia.';
$_['text_sandbox_enabled_label']                        = 'Aktywny'; 
$_['text_sandbox_section_heading']                      = 'Ustawienia Square Sandbox';
$_['text_select_location']                              = 'Wybierz lokalizację';
$_['text_settings_section_heading']                     = 'Ustawienia Square';
$_['text_squareup']                                     = '<a target="_BLANK" href="https://squareup.com"><img src="view/image/payment/squareup.png" alt="Square" title="Square" style="border: 1px solid #EEEEEE;" /></a>';
$_['text_success']                                      = 'Sukces: Zmiany zostały zapisane!';
$_['text_success_capture']                              = 'Transakcja została przechwycona!';
$_['text_success_refund']                               = 'Transakcja została zwrócona!';
$_['text_success_void']                                 = 'Transakcja została unieważniona!';
$_['text_token_expired']                                = 'Twój token dostępu do Square wygasł! <a href="%s">Kliknij tutaj</a> aby go odnowić.';
$_['text_token_expiry_warning']                         = 'Twój token dostępu do Square wygaśnie dnia %s. <a href="%s">Kliknij tutaj</a> aby go odnowić.';
$_['text_token_revoked']                                = 'Twój token dostępu do Square wygasł lub został unieważniony! <a href="%s">Kliknij tutaj</a> aby ponownie autoryzować rozszerzenie Square.';
$_['text_transaction_statuses']                         = 'Statusy transakcji';
$_['text_view']                                         = 'Zobacz więcej';
$_['text_void']                                         = 'Unieważnij';
$_['text_na']                                           = 'Nie dotyczy';
$_['text_no_reason_provided']                           = 'Nie podano przyczyny.';

// Statuses
$_['squareup_status_comment_authorized']                = 'Transakcja kartą została autoryzowana ale nie przechwycona.';
$_['squareup_status_comment_captured']                  = 'Transakcja kartą została autoryzowana, a następnie przechwycona (tzn. zakończona).';
$_['squareup_status_comment_voided']                    = 'Transakcja kartą została autoryzowana, a następnie unieważniona (tzn. anulowana).   ';
$_['squareup_status_comment_failed']                    = 'Transakcja kartą zakończyła się niepowodzeniem.';

// Entry
$_['entry_total']                                       = 'Suma';
$_['entry_geo_zone']                                    = 'Strefa geograficzna';
$_['entry_sort_order']                                  = 'Kolejność wyświetlania';
$_['entry_merchant']                                    = 'ID handlowca';
$_['entry_transaction_id']                              = 'ID transakcji';
$_['entry_order_id']                                    = 'ID zamówienia';
$_['entry_partner_solution_id']                         = 'ID rozwiązania partnera';
$_['entry_type']                                        = 'Typ transakcji';
$_['entry_currency']                                    = 'Waluta';
$_['entry_amount']                                      = 'Kwota';
$_['entry_browser']                                     = 'Przeglądarka www klienta';
$_['entry_ip']                                          = 'Customer IP klienta';
$_['entry_date_created']                                = 'Data utworzenia';
$_['entry_billing_address_company']                     = 'Rozliczenie - firma';
$_['entry_billing_address_street']                      = 'Rozliczenie - ulica';
$_['entry_billing_address_city']                        = 'Rozliczenie - miejscowość';
$_['entry_billing_address_postcode']                    = 'Rozliczenie - kod pocztowy';
$_['entry_billing_address_province']                    = 'Rozliczenie - region';
$_['entry_billing_address_country']                     = 'Rozliczenie - kraj';
$_['entry_status_authorized']                           = 'Autoryzowano';
$_['entry_status_captured']                             = 'Przechwycono';
$_['entry_status_voided']                               = 'Unieważniono';
$_['entry_status_failed']                               = 'Nieudana';
$_['entry_setup_confirmation']                          = 'Potwierdzenie instalacji:';

// Error
$_['error_permission']                                  = '<strong>Uwaga:</strong> Nie masz uprawnień do modyfikacji płatności Square!';
$_['error_permission_recurring']                        = '<strong>Uwaga:</strong> Nie masz uprawnień do modyfikacji płatności ratalnych!';
$_['error_transaction_missing']                         = 'Nie znaleziono transakcji!';
$_['error_no_ssl']                                      = '<strong>Uwaga:</strong> SSL jest nieaktywny w Twoim panelu administracyjnym. Uaktywnij go aby dokończyć konfigurowanie.';
$_['error_user_rejected_connect_attempt']               = 'Próba połączenia została anulowana przez użytkownika.';
$_['error_possible_xss']                                = 'Wykryliśmy możliwość ataku i zakończyliśmy Twoją próbę połączenia. Sprawdź swój ID aplikacji oraz hasło i spróbuj ponownie za pomocą przycisków w panelu administracyjnym.';
$_['error_invalid_email']                               = 'Podany adres e-mail jest nieprawidłowy!';
$_['error_cron_acknowledge']                            = 'Potwierdź że ustawiłeś zadanie CRON.';
$_['error_client_id']                                   = 'ID klienta aplikacji jest wymagane';
$_['error_client_secret']                               = 'Hasło klienta aplikacji jest wymagane';
$_['error_sandbox_client_id']                           = 'ID klienta sandbox jest wymagane gdy tryb sandbox jest aktywny';
$_['error_sandbox_token']                               = 'Token sandbox token jest wymagany gdy tryb sandbox jest aktywny';
$_['error_no_location_selected']                        = 'Lokalizacja jest wymagana';
$_['error_refresh_access_token']                        = "Wystąpił błąd podczas próby odświeżenia połączenia rozszerzenia z Twoim kontem Square. Sprawdź swoje dane dostępowe do aplikacji i spróbuj ponownie.";
$_['error_form']                                        = 'Sprawdź formularz pod kątem błędów i spróbuj zapisać ponownie.';
$_['error_token']                                       = 'Wystąpił błąd podczas odświeżania tokenu: %s';
$_['error_no_refund']                                   = 'Zwrot nieudany.';

// Column
$_['column_transaction_id']                             = 'ID transakcji';
$_['column_order_id']                                   = 'ID zamówienia';
$_['column_customer']                                   = 'Klient';
$_['column_status']                                     = 'Status';
$_['column_type']                                       = 'Typ';
$_['column_amount']                                     = 'Kwota';
$_['column_ip']                                         = 'IP';
$_['column_date_created']                               = 'Data utworzenia';
$_['column_action']                                     = 'Działania';
$_['column_refunds']                                    = 'Zwroty';
$_['column_reason']                                     = 'Przyczyna';
$_['column_fee']                                        = 'Opłata za przetworzenie';

// Button
$_['button_void']                                       = 'Unieważnij';
$_['button_refund']                                     = 'Zwróć';
$_['button_capture']                                    = 'Przechwyć';
$_['button_connect']                                    = 'Połącz';
$_['button_reconnect']                                  = 'Połącz ponownie';
$_['button_refresh']                                    = 'Odśwież token';
